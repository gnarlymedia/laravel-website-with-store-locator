@extends('layouts.sub')

@section('head')
	<title>Patients - General X-Ray</title>
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
            <li class="fadeover"><a href="bone-densitometry-dexa">BONE DENSITOMETRY <span class="font-normal">(</span>DEXA<span class="font-normal">)</span></a></li>
            <li><a href="ct">CT</a></li>
            <li><a href="ct-angiography">CT ANGIOGRAPHY</a></li>
            <li><a href="doppler">DOPPLER ULTRASOUND</a></li>
            <li><a href="echocardiography">ECHOCARDIOGRAPHY</a></li>
            <li><a href="#">GENERAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="mammography">MAMMOGRAPHY</a></li>
            <li><a href="mri">MRI</a></li>
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
    <li class="fadeover"><a href="patient-links">LINKS</a></li>
	<li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
    <h1>General X-Ray</h1>
    <h2>Before the Appointment</h2>
    <p>Typically you do not need to make a booking.</p>

    <p>There is no special preparation required for general X-Rays. However we do recommend that you wear loose clothing without metal buckles or zippers. You may be asked to remove earrings and other metallic jewellery for the scan.</p>

    <p>General X-Ray scanning is offered at every Capital Radiology clinic. The locations are listed on your Capital Radiology referral form or you can click Locations and find your most convenient Capital Radiology site to you. Capital Radiology accepts all radiology provider referral forms. So even if you have another form we will happily perform your test.</p>

        <h3>Please remember to bring:</h3>
        <ul>
            <li>Your referral form</li>
            <li>Medicare Card / Pension Card</li>
            <li>Any prior X-ray or scan films</li>
        </ul>

    <h2>What is an X-Ray?</h2>
    <p>General X-Rays are the most common diagnostic imaging test usually performed for assessing assessing injured limbs or examining the chest for possible infection.</p>

    <p>A picture is taken of the inside of the body by a machine which emits a small amount of radiation energy. The rays pass through the skin and muscle but are blocked by bones and teeth, creating a shadow effect. The shadows are captured and displayed on a computer screen.</p>

    <p>Different parts of the body have different tissues which vary in their absorption of x-rays. Bone, which contains calcium, does not let much radiation through and results in white images on the x-ray film. The lungs, which are filled with air, allow nearly all x-rays to strike the film resulting in a black film image.</p>

    <h2>FAQ’s</h2>
    <p>The radiographer will position the part that is being examined on a special xray bed (or upright stand) and line up the xray tube to take the picture. Usually there is more than one projection taken, e.g., two views for a chest, three views for a joint, but occasionally more pictures will need to be taken, particularly for some specialist orthopaedic views. Xrays are painless and do not take too long.</p>
@stop