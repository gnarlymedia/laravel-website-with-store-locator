@extends('layouts.sub')

@section('head')
	<title>Patient login</title>
@stop

@section('nav')
    <li class="fadeover"><a href="patient-info">PATIENT INFORMATION</a></li>
    <li class="fadeover"><a href="google-locations">LOCATIONS</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle fadeover" data-toggle="dropdown">PROCEDURES <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="bone-densitometry">BONE DENSITOMETRY</a></li>
            <li><a href="ct">CT</a></li>
            <li><a href="ct-angiography">CT ANGIOGRAPHY</a></li>
            <li><a href="doppler">DOPPLER ULTRASOUND</a></li>
            <li><a href="echocardiography">ECHOCARDIOGRAPHY</a></li>
            <li><a href="general-x-ray">GENERAL X&#45;RAY</a></li>
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
    <li><a href="#">BLOG</a><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31"></div></li>
    <li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
	@if (Session::has('login_errors'))
	  <span class="error">Username or password incorrect.</span>
	@endif
	 
	{{ Form::open(array('route' => 'session.store')) }}
	 
	  <p>{{ Form::label('email', 'Email') }}
	  {{ Form::text('email') }}</p>
	 
	  <p>{{ Form::label('password', 'Password') }}
	  {{ Form::password('password') }}</p>
	 
	  <p>{{ Form::submit('Submit') }}</p>
	 
	{{ Form::close() }}
@stop