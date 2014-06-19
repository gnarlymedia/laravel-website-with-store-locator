@extends('layouts.sub')

@section('head')
	<title>Patients - MRI</title>
@stop

@section('nav')
	<li><a href="patient-info" class="shadowed">PATIENT INFORMATION</a></li>
	<li class="fadeover"><a href="google-locations">LOCATIONS</a></li>
    <li class="dropdown"><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31"></div>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROCEDURES <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="fadeover"><a href="bone-densitometry-dexa">BONE DENSITOMETRY <span class="font-normal">(</span>DEXA<span class="font-normal">)</span></a></li>
            <li><a href="ct">CT</a></li>
            <li><a href="ct-angiography">CT ANGIOGRAPHY</a></li>
            <li><a href="doppler">DOPPLER ULTRASOUND</a></li>
            <li><a href="echocardiography">ECHOCARDIOGRAPHY</a></li>
            <li><a href="general-x-ray">GENERAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="mammography">MAMMOGRAPHY</a></li>
            <li><a href="#">MRI</a></li>
            <li><a href="nuclear-medicine">NUCLEAR MEDICINE</a></li>
            <li><a href="ultrasound">ULTRASOUND</a></li>
            <li><a href="platelet-rich-plasma">PLATELET RICH PLASMA</a></li>
            <li><a href="dental-x-ray">DENTAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="dexa">BONE MINERAL DENSITOMETRY</a></li>
            <li><a href="cardiac-imaging">CARDIAC IMAGING</a></li>
            <li><a href="opg">OPG</a></li>
        </ul>
    </li>
	<li class="fadeover"><a href="patient-billing">BILLING</a></li>
    <li class="fadeover"><a href="blog">BLOG</a></li>
	<li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
    <h1>MRI</h1>
    <h2>Before the Appointment</h2>
    <p>A booking is required for an MRI scan. Typically, there is no specific preparation required.</p>

    <p>Please inform the booking receptionist if there is a possibility that you are pregnant. You should also advise us if you have had a piece of metal in your eye or brain or eye surgery.</p>

    <p></p>Also, it is very important that you advise our staff when booking an appointment if you are unable to lay still&#47;flat.</p>

    <p>Our scanners are perfect for patients who might be overweight or slightly claustobphobic. The extra large opening means is perfect for patients of all sizes and the short gantry of 120cm means that for studies where the head is not the area under investigation the patients head can be outside the magnet.</p>

    <p>The MRI (Magnetic Resonance Imaging), machine uses a very strong magnetic field and radio waves to examine a specific area of your body. This technique does not use x-rays and is considered safe and painless.</p>

    <p>MRI provides detailed images of soft tissues, bone, fat, muscles and the internal organs of your body. A series of images are taken through sections of your body, in any direction desired.</p>

    <p>MRI produces different information from other examinations such as x-ray, ultrasound or CT scans. In particular, it provides information concerning the soft tissues including nerves, muscles, ligaments and cartilage.</p>

    <h2>FAQ’s</h2>
    <p>You will hear a variety of loud noises during the procedure we will provide you with either earphones or earplugs. The MRI technologist will be in constant communication with you during the procedure using a two-way microphone system. For your comfort, blankets and/or pillows will be provided upon request. The MRI exam room is typically cool in order to ensure that the computer system operates properly.</p>
@stop