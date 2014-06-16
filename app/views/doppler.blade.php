@extends('layouts.sub')

@section('head')
	<title>Patients - Doppler</title>
@stop

@section('nav')
	<li><a href="patient-info" class="shadowed">PATIENT INFORMATION</a></li>
	<li class="fadeover"><a href="google-locations">LOCATIONS</a></li>
    <li class="dropdown"><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31"></div>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROCEDURES <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="fadeover"><a href="patient-procedures">BONE DENSITOMETRY</a></li>
            <li><a href="ct">CT</a></li>
            <li><a href="ct-angiography">CT ANGIOGRAPHY</a></li>
            <li><a href="#">DOPPLER ULTRASOUND</a></li>
            <li><a href="echocardiography">ECHOCARDIOGRAPHY</a></li>
            <li><a href="general-x-ray">GENERAL X-RAY</a></li>
            <li><a href="mammography">MAMMOGRAPHY</a></li>
            <li><a href="mri">MRI</a></li>
            <li><a href="nuclear-medicine">NUCLEAR MEDICINE</a></li>
            <li><a href="ultrasound">ULTRASOUND</a></li>
            <li><a href="platelet-rich-plasma">PLATELET RICH PLASMA</a></li>
            <li><a href="dental-x-ray">DENTAL X-RAY</a></li>
            <li><a href="dexa">BONE MINERAL DENSITOMETRY</a></li>
            <li><a href="cardiac-imaging">CARDIAC IMAGING</a></li>
            <li><a href="opg">OPG</a></li>
        </ul>
    </li>
	<li class="fadeover"><a href="patient-billing">BILLING</a></li>
	<li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
<h1>Doppler</h1>
<h2>Before the Appointment</h2>
<p>You will need to make a booking for this examination. Depending on the area to be examined, you may be required to fast from smoking, food and fluids. You will be advised of the appropriate preparation when you make your appointment.</p>

<h2>What is A Doppler Ultrasound?</h2>
<p>Doppler Ultrasound uses special technology to allow the sonographer to study the blood flow in your arteries and veins. The most common studies performed are the arteries in the neck (carotid arteries). These supply blood to your brain and face. Other common vessels examined are the renal arteries supplying your kidneys and the veins and arteries in the legs looking for blockages or clots. Often during the Doppler scan you will hear strange noises as the signals from the flowing blood are converted to sound.</p>
@stop