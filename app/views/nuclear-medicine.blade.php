@extends('layouts.sub')

@section('head')
	<title>Patients - Nuclear Medicine</title>
@stop

@section('nav')
	<li><a href="patient-info" class="shadowed">PATIENT INFORMATION</a></li>
	<li class="fadeover"><a href="google-locations">LOCATIONS</a></li>
    <li class="dropdown"><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31"></div>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROCEDURES <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="fadeover"><a href="bone-densitometry-dexa">BONE DENSITOMETRY (DEXA)</a></li>
            <li><a href="ct">CT</a></li>
            <li><a href="ct-angiography">CT ANGIOGRAPHY</a></li>
            <li><a href="doppler">DOPPLER ULTRASOUND</a></li>
            <li><a href="echocardiography">ECHOCARDIOGRAPHY</a></li>
            <li><a href="general-x-ray">GENERAL X-RAY</a></li>
            <li><a href="mammography">MAMMOGRAPHY</a></li>
            <li><a href="mri">MRI</a></li>
            <li><a href="#">NUCLEAR MEDICINE</a></li>
            <li><a href="ultrasound">ULTRASOUND</a></li>
            <li><a href="platelet-rich-plasma">PLATELET RICH PLASMA</a></li>
            <li><a href="dental-x-ray">DENTAL X-RAY</a></li>
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
    <h1>Nuclear Medicine</h1>
    <h2>Before the Appointment</h2>
    <p>A booking is necessary for Nuclear Medicine. The locations of our Nuclear Medicine services are listed on your Capital Radiology referral or you can click Locations and find your most convenient Capital Radiology site to you. Capital Radiology accepts all radiology provider referral. So even if you have another form we will happily perform your test.</p>

    <p>Generally preparation is not required, but occasionally you will be asked to fast for 2-4 hours prior to the scan. This will depend on the type of Nuclear Medicine scan that is being done. Our bookings staff will provide you with information regarding any necessary preparation and will give you specific instructions prior to your scan. Unless otherwise stated, you may drink and eat as usual. It is recommended that you check with either your referring doctor or Capital Radiology staff if you can take your usual medications prior to a scan of your heart.</p>

    <h3>Please remember to bring:</h3>
    <ul>
        <li>Your referral form</li>
        <li>Medicare Card / Pension Card</li>
        <li>Any prior X-ray or scan films</li>
    </ul>

    <h2>What is Nuclear Medicine?</h2>
    <p>Nuclear Medicine is a branch of diagnostic imaging that uses very small amounts of radioactive material, to provide information about the function or structure of particular organs such as your heart, lungs, bones or liver.</p>

    <p>You will be given a small dose of radiopharmaceutical. The specific substance and the method of its delivery (whether by injection into a vein, through a breathing apparatus or by mouth) depends on which particular nuclear medicine test you are having.</p>

    <p>The radioactive material localises in specific parts of your body and emits radiation. The radiation is detected by a gamma camera and a computer processes the images. Images are then printed on to film or stored digitally on a computer. Nuclear Medicine allows doctors to make a relatively quick, accurate diagnosis regarding a wide range of medical and surgical conditions.</p>

    <p>Normally there is a delay between the injection and the scan that can range from several minutes to several hours. For example, the thyroid gland is scanned almost immediately after administration of the substance, whereas for a bone scan you will be asked to return approximately 3 hours after injection during which time the radiopharmaceutical will have been taken up by the bones.</p>

    <p>On completion of the test the specialist nuclear medicine physician will then examine the films and send a report to your doctor.</p>
@stop