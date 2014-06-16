@extends('layouts.sub')

@section('head')
	<title>Patients - Bone Mineral Densitometry</title>
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
            <li><a href="doppler">DOPPLER ULTRASOUND</a></li>
            <li><a href="echocardiography">ECHOCARDIOGRAPHY</a></li>
            <li><a href="general-x-ray">GENERAL X-RAY</a></li>
            <li><a href="mammography">MAMMOGRAPHY</a></li>
            <li><a href="mri">MRI</a></li>
            <li><a href="nuclear-medicine">NUCLEAR MEDICINE</a></li>
            <li><a href="ultrasound">ULTRASOUND</a></li>
            <li><a href="platelet-rich-plasma">PLATELET RICH PLASMA</a></li>
            <li><a href="dental-x-ray">DENTAL X-RAY</a></li>
            <li><a href="#">BONE MINERAL DENSITOMETRY</a></li>
            <li><a href="cardiac-imaging">CARDIAC IMAGING</a></li>
            <li><a href="opg">OPG</a></li>
        </ul>
    </li>
	<li class="fadeover"><a href="patient-billing">BILLING</a></li>
	<li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
    <h1>Bone Mineral Densitometry</h1>
    <h2>What is a Bone Mineral Densitometry scan?</h2>
    <p>Bone Mineral Densitometry (Dexa) is a scan which uses low energy x-rays to measure the
density of your bones. This scan is used to diagnose and monitor osteoporosis and asses your fracture risk.</p>

    <h2>How do I prepare for my Bone Mineral Densitometry scan?</h2>
    <p>No special preparation is required.</p>

    <h2>What happens during my Bone Mineral Densitometry scan?</h2>
    <p>You will lie down on a scanner table supported by a cushion whilst the x-ray machine moves above you. The machine will take scans of your lower spine and hip region. These measurements are then compared against the normal population of people for the same age, weight, sex and ethnicity, and also against normal young adults.</p>

    <h2>How long will it take?</h2>
    <p>This scan can take approximately 20 to 30 minutes to complete.</p>
@stop