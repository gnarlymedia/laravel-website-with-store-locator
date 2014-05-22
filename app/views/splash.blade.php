@extends('layouts.splash')

@section('head')
	<title>Capital Radiology</title>
@stop

@section('content')
	<div id="patients_referrers" class="row">
		<img src="/assets/images/logo/capital_radiology.png" alt="capital_radiology" width="240" height="76" id="logo" class="img-responsive center-block"/>
		<a href="/theme/home" id="referrer_button" class="img-responsive"></a>
		<img src="/assets/images/elements/vertical_line.png" alt="vertical_line" width="1" height="215" id="vertical_line" class="img-responsive" />
		<a href="/patients-home" id="patient_button" class="img-responsive"></a>
		<img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="50" height="50" id="glyphicon" />
	</div>
    
	<div class="row">
    	<div class="col-md-1 col-sm-1 col-xs-1"></div>
	    <div id="social" class="col-md-6 col-sm-6 col-xs-12">
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_03.jpg" alt="Sample-1.pdf-1_03" width="97" height="83" class="img-responsive" /></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_04.jpg" alt="Sample-1.pdf-1_04" width="104" height="83" class="img-responsive" /></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_05.jpg" alt="Sample-1.pdf-1_05" width="105" height="83" class="img-responsive"/></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_06.jpg" alt="Sample-1.pdf-1_06" width="100" height="83" class="img-responsive"/></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_07.jpg" alt="Sample-1.pdf-1_07" width="104" height="83" class="img-responsive"/></a>
		</div>
		<div id="copyright" class="col-md-4 col-sm-4 col-xs-12">
			Copyright (©) 2011-2014 Capital Radiology
		</div>
    	<div class="col-md-1 col-sm-1 col-xs-1"></div>
	</div>
@stop