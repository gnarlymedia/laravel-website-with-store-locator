var map;
var markers = [];
var infoWindow;
var locationSelect;
var radiusSelect;
var modalitySelect;
var currentCentre;
var userLatLng;
var radius;
var currentModality;
var modalitySelectDefaultText = "Filter by modality:";
var userMarker;
var youInfoWindow;

$(initialise);

function getCurrentModality() {
    if (modalitySelect.selectedIndex != -1) {
        currentModality = modalitySelect.options[modalitySelect.selectedIndex].innerHTML;
    }
}
function geolocate() {
    prepareGeolocation();
    doGeolocation();
}

function initialise() {
    locationSelect = document.getElementById("locationSelect");
    radiusSelect = document.getElementById("radiusSelect");
    modalitySelect = document.getElementById("modalitySelect");

    radius = radiusSelect.value;
    currentModality =  getCurrentModality();

    geolocate();

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

    var input = document.getElementById('addressInput');

    var options = {
        componentRestrictions: {
            country: 'au'
        }
    };

    autocomplete = new google.maps.places.Autocomplete(input, options);
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
    if ((coords.latitude) && (coords.longitude)) {
        userLatLng = new google.maps.LatLng(coords.latitude, coords.longitude);
    } else if ((position.k) && (position.A)) {
        userLatLng = new google.maps.LatLng(position.k, position.A);
    }

    
    var myOptions = {
/*       zoom: 12, */
      center: userLatLng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      disableDefaultUI: true,
      mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        
    userMarker = new google.maps.Marker({
	    map: map,
	    position: userLatLng,
	    title: 'You are here',
	    icon: {
        	url: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
		},
    });
    
   	var html = "You are here";

    if (!youInfoWindow) {
        youInfoWindow = new google.maps.InfoWindow();
    }
    youInfoWindow.visibility = false;
	youInfoWindow.setContent(html);
	youInfoWindow.open(map, userMarker);
    
    document.getElementById('info').innerHTML = 'Looking for <b>' + coords.latitude + ', ' + coords.longitude + '</b>...';

    // And reverse geocode.
    (new google.maps.Geocoder()).geocode({latLng: userLatLng}, function(resp) {
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
				userMarker.setTitle(resp[0].formatted_address);
			}
			var infoObject = document.getElementById('info');
			infoObject.innerHTML = place;
/* 			infoObject.height = inherit; */
			
			currentCentre = resp[0].geometry.location;
			
		    searchLocationsNear(currentCentre);

            youInfoWindow.visibility = true;
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
            var thisPosition = results[0].geometry.location;
            positionSuccess(thisPosition);
            searchLocationsNear(thisPosition);
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
     option.innerHTML = modalitySelectDefaultText;
     modalitySelect.appendChild(option);
}

function searchLocationsNear(center) {

    clearLocations();

    var searchUrl = '/assets/php/phpsqlsearch_genxml.php?lat=' + center.lat() + '&lng=' + center.lng() + '&radius=' + radius;

    downloadUrl(searchUrl, downloadComplete);
}

function downloadComplete(data) {
    // Shared by allClinicAndModalities and currentClinics
    var nameOfName = "name";
    var nameOfDistance = "distance";
    var nameOfNum = "num";
    var nameOfAddress = "address";
    var nameOfLatLng = "latlng";

    // Just allClinicAndModalities
    var nameOfModality = "modality";

    // Just currentClinics
    var nameOfModalitiesArray = "modalities";

    var currentClinics = [];
    var singleClinic;

    var allCurrentClinicNames = [];
    var allCurrentModalities = [];
    var xml = parseXml(data);
    var markerNodes = xml.documentElement.getElementsByTagName("marker");
    var bounds = new google.maps.LatLngBounds();

    function addClinicModalityToCurrentClinics(name, address, distance, latlng, modality) {
        if (allCurrentClinicNames.indexOf(name) == -1) {
            // New clinic
            allCurrentClinicNames.push(name);

            singleClinic = {};

            singleClinic[nameOfName] = name;
            singleClinic[nameOfDistance] = distance;
            singleClinic[nameOfNum] = i;
            singleClinic[nameOfAddress] = address;
            singleClinic[nameOfLatLng] = latlng;
            singleClinic[nameOfModalitiesArray] = [modality];

            currentClinics.push(singleClinic);
        } else {
            // Existing clinic
            for (var n = 0; n < currentClinics.length; n++) {
                if (currentClinics[n][nameOfName] == name) {
                    currentClinics[n][nameOfModalitiesArray].push(modality);
                }
            }
        }

        if (allCurrentModalities.indexOf(modality) == -1) {
            allCurrentModalities.push(modality);
        }
    }

    for (var i = 0; i < markerNodes.length; i++) {
        var name = markerNodes[i].getAttribute("name");
        var address = markerNodes[i].getAttribute("address");
        var distance = parseFloat(markerNodes[i].getAttribute("distance"));
        var latlng = new google.maps.LatLng(
            parseFloat(markerNodes[i].getAttribute("lat")),
            parseFloat(markerNodes[i].getAttribute("lng"))
        );
        var modality = markerNodes[i].getAttribute("modality");

        // Check if we should examine this clinic
        if ((currentModality) && (currentModality != modalitySelectDefaultText)) {
            // A modality has been selected
            if (modality == currentModality) {
                // This modality we've found is the current selected modality  - add to current clinics
                addClinicModalityToCurrentClinics(name, address, distance, latlng, modality);
            }
        } else {
            // No modality set yet
            addClinicModalityToCurrentClinics(name, address, distance, latlng, modality);
        }
    }

    // Set up location selector
    for (j = 0; j < currentClinics.length; j++) {
        createOptionLocation(currentClinics[j][nameOfName], currentClinics[j][nameOfDistance], j);
    }

    // Set up modality selector
    for (var k = 0; k < allCurrentModalities.length; k++) {
        createOptionModality(allCurrentModalities[k], k);
    }

    // Reselect previously selected modality
    var modalityOptions = modalitySelect.options;
    var currentSelectorModality = "";
    for (var m = 0; m < modalityOptions.length; m ++) {
        currentSelectorModality = modalityOptions[m];
        if (currentSelectorModality.innerHTML == currentModality) {
            currentSelectorModality.selected = true;
        }
    }

    // Set up markers
    createMarkers(currentClinics);

    function createMarkers(clinicsForMarkers) {
        var markerModalities;
        var thisLatlng;

        for (var q = 0; q < clinicsForMarkers.length; q++) {
            thisLatlng = clinicsForMarkers[q][nameOfLatLng];
            markerModalities = makeMarkerModalitiesOutput(clinicsForMarkers[q][nameOfModalitiesArray]);
            createMarker(thisLatlng, clinicsForMarkers[q][nameOfName], clinicsForMarkers[q][nameOfAddress], markerModalities);
            bounds.extend(thisLatlng);
        }
    }

    // Extend for user position
    bounds.extend(userLatLng);
    map.fitBounds(bounds);

    locationSelect.style.visibility = "visible";
    modalitySelect.style.visibility = "visible";

    function makeMarkerModalitiesOutput(markerModalities) {
        var output = "";
        for (var i = 0; i < markerModalities.length; i++) {
            output += markerModalities[i];
            if (i != markerModalities.length - 1) {
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