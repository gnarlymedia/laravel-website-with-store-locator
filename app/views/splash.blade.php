@extends('layouts.splash')

@section('head')
	<title>Capital Radiology</title>
@stop

@section('content')
	<img src="/assets/images/background/background_1600.jpg" alt="background" width="1600" height="805" id="background-image" />
	
	<div id="patients_referrers">
		<img src="/assets/images/logo/capital_radiology.png" alt="capital_radiology" width="240" height="76" id="logo" class="img-responsive"/>
		<a href="/theme/home" id="referrer_button" width="265" height="77"></a>
		<img src="/assets/images/elements/vertical_line.png" alt="vertical_line" width="1" height="215" id="vertical_line" />
		<a href="/patients-home" id="patient_button"></a>
	</div>

   	<img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="50" height="50" id="glyphicon" />
    
	<div class="row">
    	<div class="col-md-1 col-sm-1 col-xs-1"></div>
	    <div id="social" class="col-md-7 col-sm-7 col-xs-7">
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_03.jpg" alt="Sample-1.pdf-1_03" width="97" height="83" class="img-responsive" /></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_04.jpg" alt="Sample-1.pdf-1_04" width="104" height="83" class="img-responsive" /></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_05.jpg" alt="Sample-1.pdf-1_05" width="105" height="83" class="img-responsive"/></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_06.jpg" alt="Sample-1.pdf-1_06" width="100" height="83" class="img-responsive"/></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_07.jpg" alt="Sample-1.pdf-1_07" width="104" height="83" class="img-responsive"/></a>
		</div>
		<div id="copyright" class="col-md-3 col-sm-3 col-xs-3">
			Copyright (©) 2011-2014 Capital Radiology
		</div>
    	<div class="col-md-1 col-sm-1 col-xs-1"></div>
	</div>
@stop