@extends('layouts.splash')

@section('head')
	<title>Capital Radiology</title>
@stop

@section('content')
	<div id="patients_referrers" class="row">
		<img src="/assets/images/logo/capital_radiology.png" alt="capital_radiology" width="240" height="76" id="logo" class="img-responsive center-block"/>
		<a href="/mockup-referrer"><img src="/assets/images/buttons/referrer_info_larger.png" alt="referrer_info" width="353" height="77" id="referrer_button" class="img-responsive fadeover" /></a>
		<div id="right"></div>
		<a href="/mockup-patients"><img src="/assets/images/buttons/patient_info_larger.png" alt="patient_info" width="353" height="77" id="patient_button" class="img-responsive fadeover"/></a>
	</div>
    
	<div class="row">
    	<div class="col-md-1 col-sm-1 col-xs-1"></div>
	    <div id="social" class="col-md-6 col-sm-6 col-xs-12">
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_03.jpg" alt="Sample-1.pdf-1_03" width="97" height="83" class="img-responsive fadeover" /></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_04.jpg" alt="Sample-1.pdf-1_04" width="104" height="83" class="img-responsive fadeover" /></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_05.jpg" alt="Sample-1.pdf-1_05" width="105" height="83" class="img-responsive fadeover"/></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_06.jpg" alt="Sample-1.pdf-1_06" width="100" height="83" class="img-responsive fadeover"/></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_07.jpg" alt="Sample-1.pdf-1_07" width="104" height="83" class="img-responsive fadeover"/></a>
		</div>
		<div id="copyright" class="col-md-4 col-sm-4 col-xs-12">
			Copyright (©) 2011-2014 Capital Radiology
		</div>
    	<div class="col-md-1 col-sm-1 col-xs-1"></div>
	</div>
@stop