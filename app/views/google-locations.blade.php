<!DOCTYPE xhtml PUBLIC "-//W3C//DTD XHTML 4.01//EN">
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<title>Where Am I?</title>
<script type="text/javascript"
  src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="/assets/javascript/geometa.js"></script>
<style type="text/css">
  html { margin:0; padding:0 }
  body { margin: 10px; }
  div#map_canvas { width:100%; height:100%; }
  div#info { width:100%; position:absolute; overflow:hidden; text-align:center; top:0;
    left:0; font-size: small; }
  div#info_msg { position:relative; margin:0 auto; top:50% }
  .lightBox {
    filter:alpha(opacity=60);
    -moz-opacity:0.6;
    -khtml-opacity: 0.6;
    opacity: 0.6;
    background-color:white;
    padding:2px;
  }
  div#addressFinder {
	  margin-top: 20px;
  }
</style>
<script type="text/javascript">

	var map;
	var markers = [];
	var infoWindow;
	var locationSelect;
	var radiusSelect;
	var currentCentre;
	var latLng;
  
  function initialise() {
/*
    var latlng = new google.maps.LatLng(-37.824329,144.942257);
    var myOptions = {
      zoom: 12,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      disableDefaultUI: false,
      mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
*/
    prepareGeolocation();
    doGeolocation();
    
    infoWindow = new google.maps.InfoWindow();
    
	locationSelect = document.getElementById("locationSelect");
	locationSelect.onchange = function() {
		var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
		if (markerNum != "none"){
			google.maps.event.trigger(markers[markerNum], 'click');
		}
	};
	
	radiusSelect = document.getElementById("radiusSelect");
	radiusSelect.onchange = function() {
		if (currentCentre) {
		    searchLocationsNear(currentCentre);
		}
	};
  }

  function doGeolocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(positionSuccess, positionError);
    } else {
      positionError(-1);
    }
  }

  function positionError(err) {
    var msg;
    switch(err.code) {
      case err.UNKNOWN_ERROR:
        msg = "Unable to find your location";
        break;
      case err.PERMISSION_DENIED:
        msg = "Permission denied in finding your location";
        break;
      case err.POSITION_UNAVAILABLE:
        msg = "Your location is currently unknown";
        break;
      case err.BREAK:
        msg = "Attempt to find location took too long";
        break;
      default:
        msg = "Location detection not supported in browser";
    }
    document.getElementById('info').innerHTML = msg;
  }

  function positionSuccess(position) {
    // Centre the map on the new location
    var coords = position.coords || position.coordinate || position;
    latLng = new google.maps.LatLng(coords.latitude, coords.longitude);
    
    var myOptions = {
/*       zoom: 12, */
      center: latLng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      disableDefaultUI: false,
      mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        
    var marker = new google.maps.Marker({
	    map: map,
	    position: latLng,
	    title: 'You are here',
	    icon: {
        	url: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
		},
    });
    
   	var html = "You are here";
    
    var youInfoWindow = new google.maps.InfoWindow();
    youInfoWindow.visibility = false;
	youInfoWindow.setContent(html);
	youInfoWindow.open(map, marker);

    youInfoWindow.visibility = true;
    
    document.getElementById('info').innerHTML = 'Looking for <b>' +
        coords.latitude + ', ' + coords.longitude + '</b>...';

    // And reverse geocode.
    (new google.maps.Geocoder()).geocode({latLng: latLng}, function(resp) {
		  var place = "You're around here somewhere!";
		  if (resp[0]) {
			  var bits = [];
			  for (var i = 0, I = resp[0].address_components.length; i < I; ++i) {
				  var component = resp[0].address_components[i];
				  if (contains(component.types, 'political')) {
					  bits.push('<b>' + component.long_name + '</b>');
					}
				}
				if (bits.length) {
					place = bits.join(' > ');
				}
				marker.setTitle(resp[0].formatted_address);
			}
			var infoObject = document.getElementById('info');
			infoObject.innerHTML = place;
/* 			infoObject.height = inherit; */
			
			currentCentre = resp[0].geometry.location;
			
		    searchLocationsNear(currentCentre);
	  });
  }

  function contains(array, item) {
	  for (var i = 0, I = array.length; i < I; ++i) {
		  if (array[i] == item) return true;
		}
		return false;
	}

function searchLocations() {
     var address = document.getElementById("addressInput").value;
     var geocoder = new google.maps.Geocoder();
     geocoder.geocode({address: address}, function(results, status) {
       if (status == google.maps.GeocoderStatus.OK) {
        searchLocationsNear(results[0].geometry.location);
       } else {
         alert(address + ' not found');
       }
     });
   }

   function clearLocations() {
     infoWindow.close();
     for (var i = 0; i < markers.length; i++) {
       markers[i].setMap(null);
     }
     markers.length = 0;

     locationSelect.innerHTML = "";
     var option = document.createElement("option");
     option.value = "none";
     option.innerHTML = "See all results:";
     locationSelect.appendChild(option);
   }

   function searchLocationsNear(center) {
     clearLocations();

     var radius = document.getElementById('radiusSelect').value;
     var searchUrl = '/assets/php/phpsqlsearch_genxml.php?lat=' + center.lat() + '&lng=' + center.lng() + '&radius=' + radius;
     downloadUrl(searchUrl, function(data) {
       var xml = parseXml(data);
       var markerNodes = xml.documentElement.getElementsByTagName("marker");
       var bounds = new google.maps.LatLngBounds();
       for (var i = 0; i < markerNodes.length; i++) {
         var name = markerNodes[i].getAttribute("name");
         var address = markerNodes[i].getAttribute("address");
         var distance = parseFloat(markerNodes[i].getAttribute("distance"));
         var latlng = new google.maps.LatLng(
              parseFloat(markerNodes[i].getAttribute("lat")),
              parseFloat(markerNodes[i].getAttribute("lng")));

         createOption(name, distance, i);
         createMarker(latlng, name, address);
         bounds.extend(latlng);
       }
       bounds.extend(latLng);
       map.fitBounds(bounds);
       locationSelect.style.visibility = "visible";
       locationSelect.onchange = function() {
         var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
         google.maps.event.trigger(markers[markerNum], 'click');
       };
      });
    }

    function createMarker(latlng, name, address) {
      var html = "<b>" + name + "</b> <br/>" + address;
      var marker = new google.maps.Marker({
        map: map,
        position: latlng,
        icon: {
        	url: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
		},
      });
      
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
      markers.push(marker);
    }

    function createOption(name, distance, num) {
      var option = document.createElement("option");
      option.value = num;
      option.innerHTML = name + " (" + distance.toFixed(1) + " km)";
      locationSelect.appendChild(option);
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request.responseText, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function parseXml(str) {
      if (window.ActiveXObject) {
        var doc = new ActiveXObject('Microsoft.XMLDOM');
        doc.loadXML(str);
        return doc;
      } else if (window.DOMParser) {
        return (new DOMParser).parseFromString(str, 'text/xml');
      }
    }

    function doNothing() {}

</script>
</head>
<body onload="initialise()">
    <div id="addressFinder">
     <input type="text" id="addressInput" size="50"/>
    <select id="radiusSelect" onchange="">
      <option value="5">5km</option>
      <option value="10" selected>10km</option>
      <option value="25">25km</option>
      <option value="50">50km</option>
      <option value="100">100km</option>
      <option value="200">200km</option>
      <option value="20000">20000km</option>
    </select>

    <input type="button" onclick="searchLocations()" value="Search"/>
    </div>
    <div><select id="locationSelect" style="width:100%;visibility:hidden"></select></div>
  <div id="map_canvas"></div>
  <div id="info" class="lightbox">Detecting your location...</div>
</body>
</html>
