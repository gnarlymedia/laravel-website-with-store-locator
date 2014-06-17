@extends('layouts.sub')

@section('head')
	<title>Patients - CT Angiography</title>
@stop

@section('nav')
	<li><a href="patient-info" class="shadowed">PATIENT INFORMATION</a></li>
	<li class="fadeover"><a href="google-locations">LOCATIONS</a></li>
    <li class="dropdown"><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31"></div>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROCEDURES <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="fadeover"><a href="bone-densitometry-dexa">BONE DENSITOMETRY (DEXA)</a></li>
            <li><a href="ct">CT</a></li>
            <li><a href="#">CT ANGIOGRAPHY</a></li>
            <li><a href="doppler">DOPPLER ULTRASOUND</a></li>
            <li><a href="echocardiography">ECHOCARDIOGRAPHY</a></li>
            <li><a href="general-x-ray">GENERAL X-RAY</a></li>
            <li><a href="mammography">MAMMOGRAPHY</a></li>
            <li><a href="mri">MRI</a></li>
            <li><a href="nuclear-medicine">NUCLEAR MEDICINE</a></li>
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
<h1>CT</h1>
<h2>Before the Appointment</h2>
<p>A booking is required for most CT Scans. The locations of our CT scanners are listed on your Capital Radiology referral form or you can click Locations and find your most convenient Capital Radiology site to you. Capital Radiology accepts all radiology provider referral forms. So even if you have another form we will happily perform your test.</p>

<p>Some scans require no preparation. Others may require you fast for several hours, or to drink a special contrast medium prior to the examination. When making your booking Capital Radiology staff will advise you of any preparation that may be required.</p>

<p>When you arrive at our clinic you will be greeted by our friendly reception team then escorted to the CT scanning room by our Radiographer. Depending upon the type of procedure you may be asked to change into a medical gown.</p>

<p>In some cases a contrast injection may improve the accuracy of the scan. If contrast is required the injection is usually made into an arm vein. As metal objects can interfere with the x-rays you may be asked to remove metal objects such as glasses, necklaces earings etc.</p>

<p>We request that you complete a questionnaire and sign a consent form before we perform a CT.</p>

<h2>What is a CT Scan?</h2>
<p>A CT scan is a painless, non-invasive test to view the health of tissues and vessels throughout the body. It is used to diagnose diseases and disorders of the digestive system organs, urinary system, appendix, liver, spleen, pancreas and kidneys; to locate or confirm the presence of tumours, identify sources of pain, and diagnose vascular disorders that can lead to stroke, heart attack, or kidney failure and as an aid in planning radiation treatments for tumours and guiding biopsies and other minimally invasive procedures.</p>

<p>A CT scanner is a looks like a large doughnut attached to a flat table that moves through the middle. The scanner will rotate around your body to collect data. This data is then reconstructed into a cross sectional images using the computer and the results interpreted by the Radiologist and results sent to your doctor.</p>
@stop