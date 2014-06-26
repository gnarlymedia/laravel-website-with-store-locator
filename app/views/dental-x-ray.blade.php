@extends('layouts.sub')

@section('head')
	<title>Patients - DENTAL X-RAY</title>
@stop

@section('nav')
	<li class="fadeover"><a href="patient-info">INFO</a></li>
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
            <li><a href="#">DENTAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="dexa">BONE MINERAL DENSITOMETRY</a></li>
            <li><a href="cardiac-imaging">CARDIAC IMAGING</a></li>
            <li><a href="opg">OPG</a></li>
        </ul>
    </li>
	<li class="fadeover"><a href="patient-billing">BILLING</a></li>
    <li class="fadeover"><a href="blog">BLOG</a></li>
    <li class="fadeover"><a href="patient-links">LINKS</a></li>
	<li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
    <h1>Dental X-Ray</h1>
    <h2>What is Dental X-Ray?</h2>
    <p>An Orthopantomogram (OPG) is an x-ray picture taken in a panoramic view that is shown on a single film. This allows the dentist to view the upper and lower jaw, and all the teeth on one picture.</p>

    <p>A Lateral Cephalogram is a side-view x-ray of the face showing the bones and facial contours in profile on a single film.</p>

    <h2>Before the Appointment</h2>
    <p>No preparation is required.</p>

    <h2>What happens during my Dental X-ray?</h2>
    <p>The radiographer will ask you to remove all metal objects such as necklaces and earrings as they interfere with the quality of the images.</p>

    <p>For an OPG, you will be asked to bite gently on a peg with your front teeth. Whilst the image is being taken, the machine will rotate slowly around you. It is essential to keep still otherwise the image may appear blurred.</p>

    <p>For a Lateral Cephalogram, a pair of cone-shaped plastic supports are gently positioned in each ear. This aligns each side of the face to ensure an exact side view of the face is obtained.</p>

    <h2>How long will it take?</h2>
    <p>This examination takes approximately 5 to 10 minutes to complete.</p>
@stop