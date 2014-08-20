@extends('layouts.sub')

@section('head')
	<title>Locations</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

   	{{ HTML::script('/assets/javascript/google_locations.js') }}
    {{ HTML::script('http://maps.googleapis.com/maps/api/js?libraries=places&sensor=true_or_false') }}
	
	<style type="text/css">

	</style>
@stop

@section('nav')
    <li class="fadeover"><a href="patient-info">INFO</a></li>

    <li class="dropdown"><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31"></div>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOCATIONS <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="locations-list">LOCATIONS LIST</a></li>
            <li><a href="#">LOCATIONS NEAR ME</a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROCEDURES <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="bone_densitometry">BONE DENSITOMETRY <span class="font-normal">(</span>DEXA<span class="font-normal">)</span></a></li>
            <li><a href="ct">CT</a></li>
            <li><a href="ct_angiography">CT ANGIOGRAPHY</a></li>
            <li><a href="doppler">DOPPLER ULTRASOUND</a></li>
            <li><a href="echocardiography">ECHOCARDIOGRAPHY</a></li>
            <li><a href="general_xray">GENERAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="mammography">MAMMOGRAPHY</a></li>
            <li><a href="mri">MRI</a></li>
            <li><a href="nuclear_medicine">NUCLEAR MEDICINE</a></li>
            <li><a href="#">ULTRASOUND</a></li>
            <li><a href="platelet_rich_plasma">PLATELET RICH PLASMA</a></li>
            <li><a href="dental_x_ray">DENTAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="cardiac_imaging">CARDIAC IMAGING</a></li>
            <li><a href="opg">OPG</a></li>
        </ul>
    </li>
    <li class="fadeover"><a href="patient-billing">BILLING</a></li>
    <li class="fadeover"><a href="blog">BLOG</a></li>
    <li class="fadeover"><a href="patient-links">LINKS</a></li>
    <li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
	<div id="addressFinder" class="form-inline">
        <div>
            <h3>Locations</h3>
            <input type="text" id="addressInput" size="40" placeholder="Start typing your address or landmark" class="form-control" />
            <input class="btn btn-default" type="button" onclick="searchLocations()" value="Search this address"/>
            <input class="btn btn-default" type="button" onclick="geolocate()" value="Find my current location"/>
            <h4>Search distance</h4>
            <select id="radiusSelect" onchange="" class="form-control">
                <option value="5">5km</option>
                <option value="10">10km</option>
                <option value="25">25km</option>
                <option value="50">50km</option>
                <option value="100">100km</option>
                <option value="200" selected>200km</option>
                <option value="500">500km</option>
            </select>
        </div>
        <h4 id="filterResults">Filter results</h4>
		<select id="locationSelect" class="form-control"></select>
		<select id="modalitySelect" class="form-control"></select>
	</div>
    <div id="info_container">
        <div id="info" class="lightbox">Detecting your location...</div>
    </div>
	<div id="map_canvas"></div>
@stop