@extends('layouts.sub')

@section('head')
	<title>Patients - Ultrasound</title>
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
            <li><a href="bone_densitometry">BONE DENSITOMETRY <span class="font-normal">(</span>DEXA<span class="font-normal">)</span></a></li>
            <li><a href="ct">CT</a></li>
            <li><a href="ct_angiography">CT ANGIOGRAPHY</a></li>
            <li><a href="doppler">DOPPLER ULTRASOUND</a></li>
            <li><a href="echocardiography">ECHOCARDIOGRAPHY</a></li>
            <li><a href="general_xray">GENERAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="mammography">MAMMOGRAPHY</a></li>
            <li><a href="mri">MRI</a></li>
            <li><a href="nuclear_medicine">NUCLEAR MEDICINE</a></li>
            <li><a href="#">ULTRASOUND</a></li>
            <li><a href="platelet_rich_plasma">PLATELET RICH PLASMA</a></li>
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
    <h1>Ultrasound</h1>
    <h2>Before the Appointment</h2>
    <p>Bookings are required for Ultrasound. The locations of our Ultrasound services are listed on your Capital Radiology referral or you can click Locations and find your most convenient Capital Radiology site to you. Capital Radiology accepts all radiology provider referrals. So even if you have another form we will happily perform your test.</p>

    <p>Depending on the ultrasound examination that your doctor has requested, you may be asked to fast from food and fluids. Some examinations require you to drink a significant amount of water prior to arriving so that your bladder is full. You will be advised of the appropriate preparation at the time of booking.</p>

    <h3>Please remember to bring:</h3>
    <ul>
        <li>Your referral form</li>
        <li>Medicare Card / Pension Card</li>
        <li>Any prior X-ray or scan films</li>
    </ul>

    <h2>What is an Ultrasound?</h2>
    <p>Ultrasound examinations can be performed on most parts of the body and provide excellent information about a variety of conditions – from pregnancy to gall stones, varicose veins and even muscle tears.</p>

    <p>Scanning may take up to 1 hour but generally most appointments are for 20 – 30 minutes. Ultrasound examinations are carried out and interpreted by a Radiologist (a doctor trained in reading x-rays and ultrasounds) and a Sonographer (a technologist trained in ultrasound imaging).</p>

    <p>Often the Radiologist will come to speak with you and view the screen. This is quite routine and should not cause alarm. The images are then interpreted by the Radiologist and the results will be forwarded to your doctor.</p>

    <p>Ultrasound does not use radiation. Instead, ultrasound uses high frequency sound waves (much higher than human ears can hear) which are produced by the ultrasound probe (transducer). The reflected sound waves are detected by the probe and used to create an image which is displayed on the television screen of the ultrasound machine.</p>

    <p>You may be asked to change into a gown and you will be covered during your examination except for the area required to be examined.</p>

    <p>A layer of gel will be spread over the area to be examined to facilitate good contact as this helps to produce the best possible images. The ultrasound transducer is then placed over the area to be investigated.</p>

    <p>Ultrasound is particularly useful in pregnancy as there are no known harmful effects from its diagnostic use. Modern ultrasound equipment shows detail in “real-time”, not as still images. This enables a moving image to be seen on the screen.</p>

    <p>Your doctor will explain why an ultrasound examination is necessary and the best choice of imaging for you. Your doctor may feel it is necessary for you to have an x-ray or other procedure, as well as an ultrasound.</p>
<?php echo Marker::createClinicList(Request::path());?>
@stop