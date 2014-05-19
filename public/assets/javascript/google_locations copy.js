var map;
var markers = [];
var infoWindow;
var locationSelect;
var radiusSelect;
var modalitySelect;
var currentCentre;
var latLng;
var radius;
var current_modality;

$(initialise);

function getCurrentModality() {
    if (modalitySelect.selectedIndex != -1) {
        return modalitySelect.options[modalitySelect.selectedIndex].innerHTML;
    }
}
function initialise() {
    locationSelect = document.getElementById("locationSelect");
    radiusSelect = document.getElementById("radiusSelect");
    modalitySelect = document.getElementById("modalitySelect");

    prepareGeolocation();
    doGeolocation();

    radius = radiusSelect.value;
    current_modality =  getCurrentModality();
    
    infoWindow = new google.maps.InfoWindow();

	locationSelect.onchange = function() {
		var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
		if (markerNum != "none"){
			google.maps.event.trigger(markers[markerNum], 'click');
		}
	};

	radiusSelect.onchange = function() {
		if (currentCentre) {
            radius = radiusSelect.value;
		    searchLocationsNear(currentCentre);
		}
	};

    modalitySelect.onchange = function() {
        getCurrentModality();
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
      disableDefaultUI: true,
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
    
    document.getElementById('info').innerHTML = 'Looking for <b>' + coords.latitude + ', ' + coords.longitude + '</b>...';

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
     
     modalitySelect.innerHTML = "";
     var option = document.createElement("option");
     option.value = "none";
     option.innerHTML = "Filter by modality:";
     modalitySelect.appendChild(option);
}

function searchLocationsNear(center) {

    clearLocations();

    var searchUrl = '/assets/php/phpsqlsearch_genxml.php?lat=' + center.lat() + '&lng=' + center.lng() + '&radius=' + radius;

    downloadUrl(searchUrl, downloadComplete);
}

function downloadComplete(data) {
    // clinic_modality
    var indexOfName = 0;
    var indexOfDistance = 1;
    var indexOfNum = 2;
    var indexOfAddress = 3;
    var indexOfLatLng = 4;
    var indexOfModality = 5;

    var clinic_modality;
    var clinic_names_for_select = [];
    var modalities_for_select = [];
    var clinics_for_select = [];
    var clinics_modalities = [];
    var xml = parseXml(data);
    var markerNodes = xml.documentElement.getElementsByTagName("marker");
    var bounds = new google.maps.LatLngBounds();

    for (var i = 0; i < markerNodes.length; i++) {
        var name = markerNodes[i].getAttribute("name");
        var address = markerNodes[i].getAttribute("address");
        var distance = parseFloat(markerNodes[i].getAttribute("distance"));
        var latlng = new google.maps.LatLng(
            parseFloat(markerNodes[i].getAttribute("lat")),
            parseFloat(markerNodes[i].getAttribute("lng"))
        );
        var modality = markerNodes[i].getAttribute("modality");

        clinic_modality = [name, distance, i, address, latlng, modality];

        clinics_modalities.push(clinic_modality);

        if (clinic_names_for_select.indexOf(clinic_modality[indexOfName]) == -1) {
            clinic_names_for_select.push(clinic_modality[indexOfName]);
            clinics_for_select.push(clinic_modality);
        }

        if (modalities_for_select.indexOf(clinic_modality[indexOfModality]) == -1) {
            modalities_for_select.push(clinic_modality[indexOfModality]);
        }
    }

    // Set up location selector
    for (j = 0; j < clinics_for_select.length; j++) {
        createOptionLocation(clinics_for_select[j][indexOfName], clinics_for_select[j][indexOfDistance], clinics_for_select[j][indexOfNum]);
    }

    // Set up modality selector
    for (var k = 0; k < modalities_for_select.length; k++) {
        createOptionModality(modalities_for_select[k], k);
    }

    var modalityOptions = modalitySelect.options;
    var currentModality = "";
    for (var m = 0; m < modalityOptions.length; m ++) {
        currentModality = modalityOptions[m];
        if (currentModality.innerHTML == current_modality) {
            currentModality.selected = true;
        }
    }

    var this_marker_name;

    // Set up markers
    if (current_modality) {
        for (var l = 0; l < clinics_modalities.length; l++) {
            var this_modality = clinics_modalities[l][indexOfModality];

            if (this_modality == current_modality) {
                var this_latlng = clinics_modalities[l][indexOfLatLng];
                this_marker_name = clinics_modalities[l][indexOfName];
                var marker_modalities = make_marker_modalities_output(get_marker_modalities(this_marker_name));

                createMarker(this_latlng, this_marker_name, clinics_modalities[l][indexOfAddress], marker_modalities);

                bounds.extend(this_latlng);
            }
        }
    } else {
        // No modality set yet
    }

    // Extend for user position
    bounds.extend(latLng);
    map.fitBounds(bounds);

    locationSelect.style.visibility = "visible";
    modalitySelect.style.visibility = "visible";

    function get_marker_modalities(this_marker_name) {
        var marker_modalities = [];
        for (var i = 0; i < clinics_modalities.length; i++) {
            if (clinics_modalities[i][indexOfName] == this_marker_name) {
                marker_modalities.push(clinics_modalities[i][indexOfModality]);
            }
        }
        return marker_modalities;
    }

    function make_marker_modalities_output(marker_modalities) {
        var output = "";
        for (var i = 0; i < marker_modalities.length; i++) {
            output += marker_modalities[i];
            if (i != marker_modalities.length - 1) {
                output += ", ";
            }
        }
        return output;
    }
}

function createMarker(latlng, name, address, modalities) {
    var html = "<b>" + name + "</b> <br />" + address + "<br />Modalities: " + modalities;
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

function createOptionLocation(name, distance, num) {
      var option = document.createElement("option");
      option.value = num;
      option.innerHTML = name + " (" + distance.toFixed(1) + " km)";
      locationSelect.appendChild(option);
}

function createOptionModality(name, num) {
    var option = document.createElement("option");
    option.value = num;
    option.innerHTML = name;
    modalitySelect.appendChild(option);
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