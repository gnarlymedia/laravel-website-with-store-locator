@extends('layouts.mockup')

@section('head')
	<title>Referrers Home</title>
	
	{{ HTML::style('/assets/stylesheets/mockup_referrers.css'); }}
@stop

@section('nav')
	<li><a href="#"><img src="/assets/images/buttons/referrer_info.png" alt="referrer_info" width="232" height="51" class="img-responsive fadeover" /></a></li>
	<li><a href="#"><img src="/assets/images/buttons/results.png" alt="results" width="94" height="51" class="img-responsive fadeover" /></a></li>
	<li><a href="#"><img src="/assets/images/buttons/billing.png" alt="billing" width="177" height="51" class="img-responsive fadeover" /></a></li>
@stop

@section('content')
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<img src="/assets/images/iStock_2_smaller.jpg" alt="iStock_2" width="400" height="267" id="referrer-body-image"/>
	<h1>Results Direct to your Desk</h1>
	<p>In addition to fax and secure email Capital Radiology offers an efficient, reliable and convenient way of delivering reports and digital images direct to your practice management software. Alternatively you can access your patient reports and images over the Internet.</p>
	<p>To access this service please contact support@capitalradiology.com.au</p>
	
	<h2>Benefits to referrers</h2>
	<ul>
		<li>View images on same screen as reports within patient record (Medical Director & Best Practice)</li>
		<li>For other Practice Management Software simply click a hyperlink within the report and load the images from the web portal</li>
		<li>Access images and reports anywhere anytime from the web portal</li>
		<li>Discuss a significant finding with one of our Radiologists within minutes of reporting</li>
		<li>Eliminate film storage problems</li>
		<li>Eliminate inconvenience of patients losing or forgetting films</li>
		<li>Forward patient’s reports and images for second opinion quickly, easily and securely</li>
		<li>Review historical reports with images (not retrospectively)</li>
	</ul>
	<h2>Benefits to your patients</h2>
	<ul>
		<li>No waiting or returning to collect films and reports</li>
		<li>No film storage or lost records</li>
	</ul>
@stop