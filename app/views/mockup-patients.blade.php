@extends('layouts.mockup')

@section('head')
	<title>Patients - Locations</title>
	
   	{{ HTML::script('/assets/javascript/google_locations.js') }}
    {{ HTML::script('http://maps.googleapis.com/maps/api/js?libraries=places&sensor=true_or_false') }}
    {{ HTML::script('/assets/javascript/geometa.js') }}
	{{ HTML::style('/assets/stylesheets/google_locations.css') }}
	
	{{ HTML::style('/assets/stylesheets/mockup_patients.css'); }}
@stop

@section('nav')
	<li><a href="#"><img src="/assets/images/buttons/patient_info.png" alt="patient_info" width="216" height="51" class="img-responsive fadeover" /></a></li>
	<li><a href="#"><img src="/assets/images/buttons/locations.png" alt="locations" width="177" height="51" class="img-responsive" /></a></li>
	<li><a href="#"><img src="/assets/images/buttons/procedures.png" alt="procedures" width="177" height="51" class="img-responsive fadeover" /></a></li>	
	<li><a href="#"><img src="/assets/images/buttons/billing.png" alt="billing" width="177" height="51" class="img-responsive fadeover" /></a></li>
	<li><a href="#"><img src="/assets/images/buttons/contact.png" alt="contact" width="177" height="51" class="img-responsive fadeover" /></a></li>
@stop

@section('content')
	<div id="info" class="lightbox">Detecting your location...</div>
	<div id="addressFinder">
		<input type="text" id="addressInput" size="50" placeholder="Start typing your address or landmark"/>
		<select id="radiusSelect" onchange="">
			<option value="5">5km</option>
			<option value="10">10km</option>
			<option value="25">25km</option>
			<option value="50">50km</option>
			<option value="100">100km</option>
			<option value="200" selected>200km</option>
			<option value="20000">20000km</option>
		</select>
	
		<input type="button" onclick="searchLocations()" value="Search This Address"/>
        <input type="button" onclick="geolocate()" value="Find My Current Location"/>
	</div>
	<div>
		<select id="locationSelect"></select>
	</div>
	<div>
		<select id="modalitySelect"></select>
	</div>
	<div id="map_canvas"></div>
@stop