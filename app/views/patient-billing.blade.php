@extends('layouts.sub')

@section('head')
	<title>Patients - Billing</title>
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
    <li class="dropdown">
        <a href="#" class="dropdown-toggle fadeover" data-toggle="dropdown">PROCEDURES <b class="caret"></b></a>
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
            <li><a href="#">ULTRASOUND</a></li>
            <li><a href="platelet-rich-plasma">PLATELET RICH PLASMA</a></li>
            <li><a href="dental-x-ray">DENTAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="dexa">BONE MINERAL DENSITOMETRY</a></li>
            <li><a href="cardiac-imaging">CARDIAC IMAGING</a></li>
            <li><a href="opg">OPG</a></li>
        </ul>
    </li>
	<li><a href="#">BILLING</a><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31">
        </div></li>
    <li class="fadeover"><a href="blog">BLOG</a></li>
    <li class="fadeover"><a href="patient-links">LINKS</a></li>
	<li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
    <h1>Billing</h1>
    <h2>Affordable Diagnostic Imaging for Everyone</h2>
    <p>Our philosophy is to provide high quality diagnostic imaging service at an affordable price for everyone. Most scans are Bulk Billed to Medicare on your behalf yet there are a few that attract an out of pocket charge to reflect the costs of providing a high quality diagnostic imaging service.</p>

    <p>Obstetric Ultrasound, Intervention procedures, Cone Beam CT, MRI and some Bone Mineral Density examinations are billed privately. That means we ask that you pay for the scan on the day of service.</p>

    <p>When you present your receipt to Medicare for Obstetric Ultrasound, Interventional Procedures Cone Beam CT and Diagnostic Bone Density you will receive a rebate.</p>

    <p>MRI at Capital Radiology is not funded by Medicare so there is no rebate.</p>

    <p>Our reception staff will clearly explain any charges at the time of booking.</p>

    <p>Our fees are kept to a minimum so now everyone can afford quality diagnostic imaging.</p>
@stop