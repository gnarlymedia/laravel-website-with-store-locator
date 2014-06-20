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
            <li><a href="bone-densitometry-dexa">BONE DENSITOMETRY <span class="font-normal">(</span>DEXA<span class="font-normal">)</span></a></li>
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
            <li><a href="dental-x-ray">DENTAL X<span class="font-normal">-</span>RAY</a></li>
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
    <h1>Login</h1>
	@if (Session::has('login_errors'))
	  <span class="error">Username or password incorrect.</span>
	@endif
	 
	{{ Form::open(array('route' => 'session.store', 'class' => 'form-horizontal')) }}
	 
        <div class="form-group">
          {{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) }}
          <div class="col-sm-10">
              {{ Form::text('email', null, array('class' => 'form-control')) }}
          </div>
        </div>
	 
        <div class="form-group">
          {{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }}
          <div class="col-sm-10">
              {{ Form::password('password', array('class' => 'form-control')) }}
          </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
            </div>
        </div>
	 
	{{ Form::close() }}

<!--    <a href="register" class="btn btn-default">Register here</a>-->
@stop