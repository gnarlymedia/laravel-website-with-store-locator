@extends('layouts.sub')

@section('head')
	<title>Patients - Cardiac Imaging</title>
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
            <li><a href="mri">MRI</a></li>
            <li><a href="nuclear-medicine">NUCLEAR MEDICINE</a></li>
            <li><a href="ultrasound">ULTRASOUND</a></li>
            <li><a href="platelet-rich-plasma">PLATELET RICH PLASMA</a></li>
            <li><a href="dental-x-ray">DENTAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="dexa">BONE MINERAL DENSITOMETRY</a></li>
            <li><a href="#">CARDIAC IMAGING</a></li>
            <li><a href="opg">OPG</a></li>
        </ul>
    </li>
	<li class="fadeover"><a href="patient-billing">BILLING</a></li>
    <li class="fadeover"><a href="blog">BLOG</a></li>
	<li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
    <h1>Cardiac Imaging</h1>
    <h2>What is a Myocardial Perfusion Scan?</h2>
    <p>This is used to assess how well blood is flowing to the heart muscle.</p>

    <h2>How do I prepare for my Myocardial Perfusion Scan?</h2>
    <p>No tea, herbal tea, coffee, decaffeinated coffee, hot chocolate, Milo, soft drinks, chocolate or any caffeine for at least twenty four hours (24hrs) prior to the study. You may drink water, juice and plain milk as needed.</p>

    <p>You must have a light breakfast on the morning of the test. Diabetics – eat as normal and take your usual diabetic medication.</p>

    <p>Bring a list of all medications you are currently taking, and refer to the medications listed within this leaflet for specific instructions.</p>

    <p>Bring some lunch to eat after the test.</p>

    <p>Wear casual clothing including comfortable covered footwear and refrain from applying talc, perfume or body lotion.</p>

    <p>Please remember to bring your referral on the day of the test</p>

    <h2>How long will it take?</h2>
    <p>This test has 2 parts that will either be preformed on the same day or on separate days.</p>

    <p>Allow 5 –6 hours same day or 2.5 – 3 hrs separate days.</p>
@stop