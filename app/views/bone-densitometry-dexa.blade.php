@extends('layouts.sub')

@section('head')
	<title>Patients - Bone Densitometry</title>
@stop

@section('nav')
	<li><a href="patient-info" class="shadowed">PATIENT INFORMATION</a></li>
	<li class="fadeover"><a href="google-locations">LOCATIONS</a></li>
    <li class="dropdown"><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31"></div>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROCEDURES <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#">BONE DENSITOMETRY <span class="font-normal">(</span>DEXA<span class="font-normal">)</span></a></li>
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
            <li><a href="dental-x-ray">DENTAL X&#45;RAY</a></li>
            <li><a href="dexa">BONE MINERAL DENSITOMETRY</a></li>
            <li><a href="cardiac-imaging">CARDIAC IMAGING</a></li>
            <li><a href="opg">OPG</a></li>
        </ul>
    </li>
	<li class="fadeover"><a href="patient-billing">BILLING</a></li>
    <li class="fadeover"><a href="/blog">Blog</a></li>
	<li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
    <h1>Bone Densitometry (DEXA)</h1>
    <h2>Before the Appointment</h2>
    <p>Do not take calcium or iron supplements 24 hours prior to your appointment.</p>

    <p>No other special preparation is required for A DEXA Scan. However we do recommend that you wear loose clothing without metal buckles or zippers.</p>

    <p>A booking is required for A DEXA Scan. The locations of our DEXA services are listed on your Capital Radiology referral form or you can click Locations and find your most convenient Capital Radiology site to you. Capital Radiology accepts all radiology provider referral forms. So even if you have another form we will happily perform your test.</p>

    <h3>Please also remember to bring:</h3>
    <ul>
        <li>Your referral form Medicare Card / Pension Card</li>
        <li>Any prior X-ray or scan films</li>
        <li>Medication, if asthmatic or have kidney disease</li>
    </ul>
    <h2>What is a DEXA Scan?</h2>

    <p>A Bone Mineral Density (BMD) Scan, also called a DEXA scan (dual energy X-ray absorptiometry) or Bone Densitometry, is type of X-ray test, to measure the density (thickness) of your bones. The higher the density, the stronger the bone.</p>

    <p>It is used to confirm the diagnosis of osteoporosis, estimate severity of bone loss or determine whether or not the patient is responding to treatment. A DEXA scan is the most accurate test for measuring the bone density or loss. Other tests such as ultrasound of the heal that may be offered in the community provide less useful diagnostic value.</p>

    <p>Typically the amount of bone lost, compared with the young normal population (of the same sex and ethnic background), provides an estimate of your risk of fracture or broken bones in the future which will help your doctor decide on a course of treatment to prevent further bone loss or fracture.</p>

    <p>When you arrive at our clinic you will be greeted by our friendly reception team then escorted to the DEXA scanning room by our Radiographer. Scans of your hip and spine will be taken. The test will take between 15 – 20 minutes.</p>

    <h2>FAQ’s</h2>

    <p>Bone density tests are a quick and painless procedure.</p>

    <p>Bone mineral densitometry is a scan which uses low energy x-rays to measure the density of your bone. It is used to diagnose osteoporosis and assess your fracture risk. It is also used to monitor your bone density especially if you are on treatment for osteoporosis.</p>

    <p>Routine evaluations every two years may be needed to see a significant change in bone mineral density, decrease or increase. Few patients, such as patients on high dose steroid medication, may need follow-up at six months.</p>
    <h2>Bone Densitometry (DEXA) clinics</h2>
@stop