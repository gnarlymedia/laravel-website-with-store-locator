@extends('layouts.navbar')

@section('head')
	<title>Patients Home</title>
@stop

@section('nav')
	<li><a href="/">Home</a></li>
	
    <li class="active" class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patient Portal <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li class="active"><a href="/patients-home">Home</a></li>
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          <li><a href="/patient-portal">Patient Portal</a></li>
          <li><a href="/patient-details">Patient Details</a></li>
          <li><a href="/logout">Log Out</a></li>
        </ul>
	</li>
    <li><a href="/google-locations">Locations</a></li>
    <li><a href="/blog">Blog</a></li>
@stop

@section('content')
    <!-- Carousel
    ================================================== -->
        
    <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Welcome</h1>
        <p>This is where patients access the patient portal.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="/login" role="button">Log in</a>
		  <a class="btn btn-lg btn-primary" href="/register" role="button">Register</a>
        </p>
      </div>
@stop