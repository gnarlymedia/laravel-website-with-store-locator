@extends('layouts.splash')

@section('head')
	<title>Capital Radiology</title>
@stop

@section('content')
	<img src="/assets/images/background/background_1600.jpg" alt="background" width="1600" height="805" id="background-image" />
	
	<div id="patients_referrers">
		<img src="/assets/images/logo/capital_radiology.png" alt="capital_radiology" width="240" height="76" id="logo" />		
			<a href="/theme/home">
				<img src="/assets/images/buttons/referrer_portal.png" alt="referrer_portal" width="265" height="77" />
			</a>
			<img src="/assets/images/elements/vertical_line.png" alt="vertical_line" width="1" height="215" id="vertical_line" />
			<a href="/patients-home">
				<img src="/assets/images/buttons/patient_portal.png" alt="patient_portal" width="265" height="77" />
			</a>
	</div>

   	<img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="50" height="50" id="glyphicon" />
    
	<div id="footer">
	    <div id="social">
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_03.jpg" alt="Sample-1.pdf-1_03" width="97" height="83" /></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_04.jpg" alt="Sample-1.pdf-1_04" width="104" height="83" /></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_05.jpg" alt="Sample-1.pdf-1_05" width="105" height="83" /></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_06.jpg" alt="Sample-1.pdf-1_06" width="100" height="83" /></a>
			<a href="#"><img src="/assets/images/social/Sample-1.pdf-1_07.jpg" alt="Sample-1.pdf-1_07" width="104" height="83" /></a>
		</div>
		<div id="copyright">
			Copyright (©) 2011-2014 Capital Radiology
		</div>
	</div>
@stop