@extends('layouts.sub')

@section('head')
	<title>Patients - Platelet Rich Plasma</title>
@stop

@section('nav')
	<li class="fadeover"><a href="patient-info">INFO</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle fadeover" data-toggle="dropdown">LOCATIONS <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="locations-list">LOCATIONS LIST</a></li>
            <li><a href="google-locations">LOCATIONS NEAR ME</a></li>
        </ul>
    </li>
    <li class="dropdown"><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31"></div>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROCEDURES <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="fadeover"><a href="bone_densitometry">BONE DENSITOMETRY <span class="font-normal">(</span>DEXA<span class="font-normal">)</span></a></li>
            <li><a href="ct">CT</a></li>
            <li><a href="ct_angiography">CT ANGIOGRAPHY</a></li>
            <li><a href="doppler">DOPPLER ULTRASOUND</a></li>
            <li><a href="echocardiography">ECHOCARDIOGRAPHY</a></li>
            <li><a href="general_xray">GENERAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="mammography">MAMMOGRAPHY</a></li>
            <li><a href="mri">MRI</a></li>
            <li><a href="nuclear_medicine">NUCLEAR MEDICINE</a></li>
            <li><a href="ultrasound">ULTRASOUND</a></li>
            <li><a href="#">PLATELET RICH PLASMA</a></li>
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
    <h1>Platelet Rich Plasma</h1>
    <h2>What is PRP?</h2>
    <p>Platelet Rich Plasma (PRP) is a new medical technology used in many areas including sports medicine, orthopaedics and cosmetics. It is most commonly used for treating joint disorders (such as osteoarthritis as well as tendon and ligament abnormalities. PRP has a higher concentration of platelets than blood itself and as a concentrated source, it contains and releases several different growth factors which stimulate the healing process in soft tissues and bone. The treatment is usually administered over several weeks, with recent studies suggesting potential better long term pain relief than conventional steroid injections and other therapies.</p>

    <h2>Before the Appointment</h2>
    <p>It is highly recommended you cease non-steroidal anti- inflammatory medication 7 days prior to your injection (e.g. Voltaren, Nurofen, Mobic, Cortisone). Please refrain from caffeine, alcohol and fatty foods for 24 hours prior to your injection.</p>

    <h2>On the Day</h2>
    <p>Firstly, your Doctor will take a medical history of your injury as well as any other relevant information. As your own blood is used, medical staff will take your blood, similar to a regular blood test. Your blood will then be spun down in a centrifuge to separate its components. Usually under Ultrasound guidance, between 2 – 8 mls of PRP will be injected, depending on your injury, using a sterile technique and after insertion of local anaesthetic.</p>

    <h2>Post Procedure</h2>
    <p>Abstain from heavy activity which involves the body part injected, for 3-4 days post procedure. The use of an ice pack and pain relief will also help recovery time in the first 24hours.</p>
<?php echo Marker::createClinicList(Request::path());?>
@stop