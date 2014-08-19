@extends('layouts.sub')

@section('head')
	<title>Patients - Mammography</title>
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
            <li><a href="#">MAMMOGRAPHY</a></li>
            <li><a href="mri">MRI</a></li>
            <li><a href="nuclear_medicine">NUCLEAR MEDICINE</a></li>
            <li><a href="ultrasound">ULTRASOUND</a></li>
            <li><a href="platelet_rich_plasma">PLATELET RICH PLASMA</a></li>
            <li><a href="dental_x_ray">DENTAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="cardiac_imaging">CARDIAC IMAGING</a></li>
            <li><a href="opg">OPG</a></li>
        </ul>
    </li>
	<li class="fadeover"><a href="patient-billing">BILLING</a></li>
    <li class="fadeover"><a href="blog">BLOG</a></li>
    <li class="fadeover"><a href="patient-links">LINKS</a></li>
	<li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
    <h1>Mammography</h1>
    <h2>Before the Appointment</h2>
    <p>An booking is required for a Mammogram. The locations of our Mammogram services are listed on your Capital Radiology referral or you can click Locations and find your most convenient Capital Radiology site to you. Capital Radiology accepts all radiology provider referrals. So even if you have another form we will happily perform your test.</p>

    <p>If you experience tenderness in the breasts before your menstrual period, we advise you do not schedule the exam during this time. The best time is one week following your menstrual period unless the examination is urgent.</p>

    <p>If you have breast implants, please advise staff at the time of booking, as you may need to be allocated a longer appointment.</p>

    <p>It is recommended that you do not wear any talcum powder, cream or deodorant under your arms or around the breast area on the day of your examination.</p>

    <h3>Please remember to bring:</h3>
    <ul>
        <li>Your referral form</li>
        <li>Medicare Card / Pension Card</li>
        <li>Any prior X-ray or scan films</li>
    </ul>

    <h2>What is a Mammogram?</h2>
    <p>A Mammogram is an x-ray of the breasts, taken on dedicated machines by specially trained radiographers then interpreted by a Specialist Radiologist who will report results back to your doctor.</p>

    <p>A mammogram can enable the early detection of breast cancer even before you or your doctor may be aware of any changes in your breasts. Breast cancer shows up as tiny specks of calcium or small masses on the x-ray.</p>
<?php echo Marker::createClinicList(Request::path());?>
@stop