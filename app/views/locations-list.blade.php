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
            <li><a href="#">LOCATIONS LIST</a></li>
            <li><a href="google-locations">LOCATIONS NEAR ME</a></li>
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
    <li class="fadeover"><a href="blog?type=patient">BLOG</a></li>
    <li class="fadeover"><a href="patient-links">LINKS</a></li>
    <li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
    <h1>Locations List</h1>
    <a class="btn btn-default" href="locations-list?location=all">All</a>
    <a class="btn btn-default" href="locations-list?location=north">North</a>
    <a class="btn btn-default" href="locations-list?location=west">West</a>
    <a class="btn btn-default" href="locations-list?location=south-east">South-East</a>
    <a class="btn btn-default" href="locations-list?location=east">East</a>
    <a class="btn btn-default" href="locations-list?location=regional">Regional</a>
    <p><?php
        $numberOfResults = 5;

        if (isset($_GET["location"])) {
            $value = htmlspecialchars($_GET["location"]);
            $filter = $value;
            if ($value != 'all')
                $markers = Marker::where('location_region', '=', $value)->paginate($numberOfResults);
            else
                $markers = Marker::paginate($numberOfResults);
        }
        else {
            $markers = Marker::paginate($numberOfResults);
            $filter = 'all';
        }

        if ($filter) {
            ?><h3><?php echo Config::get('constants.' . $filter) ?></h3><?php
        }
        echo Marker::createMarkerList($markers);
        if (isset($value))
            echo $markers->appends(array('location' => $value))->links();
        else
            echo $markers->links();
    ?></p>
@stop