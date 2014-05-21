@extends('layouts.splash-stellar-new')

@section('head')
	<title>Capital Radiology</title>
   	{{ HTML::script('/assets/javascript/activate_stellar_iscroll.js'); }}
@stop

@section('content')
    <div class="theme-showcase">
	  <div id="background-image" class="stellar" data-stellar-ratio="0.2">
		  <img src="/assets/images/background/background_2000.jpg" alt="background_2000" width="2000" height="1333" />
	  </div>
    </div>
	
	<div id="patients_referrers" class="stellar" data-stellar-ratio="0.75" data-stellar-vertical-offset="0">
	
		<img src="/assets/images/logo/capital_radiology.png" alt="Capital Radiology logo" width="180" height="57" id="logo"/>
		
		<div>
			<a href="/theme/home">
				<img src="/assets/images/buttons/referrer_portal.png" width="199" height="58" alt="Referrer portal" />
			</a>
			<img src="/assets/images/elements/vertical_line.png" alt="Vertical line" width="1" height="162" id="vertical_line" />
			<a href="/patients-home">
				<img src="/assets/images/buttons/patient_portal.png" alt="Patient portal" width="199" height="58" alt="Patients" />
			</a>
		</div>
	</div>

	<div id="our-story-container">
    	<img src="/assets/images/elements/glyphicon.png" alt="Glyphicon" width="38" height="38" id="glyphicon" />
		<div id="our-story-panel">
			<h1>Our Story</h1>
			<p>At Capital Radiology we offer premium level imaging and treatment services to the sporting and wider community meaning that you can have access to the same high quality imaging services, personnel, expertise and treatments as Australia’s elite athletes. We are open extended hours during the week and on weekends and free patient parking is available onsite. We invite you to contact us for more information, enquiries or bookings on 1300 X-RAY (9729).</p>
		</div>
    </div>
    
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