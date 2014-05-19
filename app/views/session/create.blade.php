@extends('layouts.navbar')

@section('head')
	<title>Patient login</title>
@stop

@section('nav')
	<li><a href="/">Home</a></li>
	
    <li class="active" class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patient Portal <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="/patients-home">Home</a></li>
          <li class="active"><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          <li><a href="/patient-portal">Patient Portal</a></li>
          <li><a href="/patient-details">Patient Details</a></li>
          <li><a href="/logout">Log Out</a></li>
        </ul>
	</li>
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