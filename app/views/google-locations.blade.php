@extends('layouts.navbar')

@section('head')
	<title>Locations</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	
   	{{ HTML::script('/assets/javascript/google_locations.js') }}
    {{ HTML::script('http://maps.googleapis.com/maps/api/js?libraries=places&sensor=true_or_false') }}
    {{ HTML::script('/assets/javascript/geometa.js') }}
	{{ HTML::style('/assets/stylesheets/google_locations.css') }}
	
	<style type="text/css">

	</style>
@stop

@section('nav')
	<li><a href="/">Home</a></li>
	
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patient Portal <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="/patients-home">Home</a></li>
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          <li><a href="/patient-portal">Patient Portal</a></li>
          <li><a href="/patient-details">Patient Details</a></li>
          <li><a href="/logout">Log Out</a></li>
        </ul>
	</li>
	<li class="active"><a href="/google-locations">Locations</a></li>
    <li><a href="/blog">Blog</a></li>
    <li><a href="/admin">Blog admin</a></li>
@stop

@section('content')
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
	<div id="info" class="lightbox">Detecting your location...</div>
@stop