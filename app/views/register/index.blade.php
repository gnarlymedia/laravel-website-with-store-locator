@extends('layouts.navbar')

@section('head')
	<title>Patient registration</title>
@stop

@section('nav')
	<li><a href="/">Home</a></li>
	
    <li class="active" class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patient Portal <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="/patients-home">Home</a></li>
          <li><a href="/login">Login</a></li>
          <li class="active"><a href="/register">Register</a></li>
          <li><a href="/patient-portal">Patient Portal</a></li>
          <li><a href="/patient-details">Patient Details</a></li>
          <li><a href="/logout">Log Out</a></li>
        </ul>
	</li>
@stop

@section('content')
	@if($errors->any())
	  <ul>
	    {{ implode('', $errors->all('<li>:message</li>'))}}
	  </ul>
	@endif
	{{ Form::open(array('route' => 'register.store')) }}
	<p>{{ Form::label('email', 'Email') }}
	  {{ Form::text('email') }}
	</p>
	<p>{{ Form::label('password', 'Password') }}
	  {{ Form::text('password') }}
	</p>
	<p>{{ Form::label('password_confirmation', 'Password confirm') }}
	  {{ Form::text('password_confirmation') }}
	</p>
	<p>
	{{ Form::label('dob', 'Date of birth') }}
	  {{ Form::text('dob') }}
	</p>
	<p>
	{{ Form::label('firstName', 'First Name') }}
	  {{ Form::text('first_name') }}
	</p>
	<p>
	{{ Form::label('surname', 'Surname') }}
	  {{ Form::text('surname') }}
	</p>
	<p>
	{{ Form::label('phoneNumber', 'Phone number') }}
	  {{ Form::text('phone_number') }}
	</p>
	<p>{{ Form::submit('Submit') }}
	</p>
	 
	{{ Form::close() }}
@stop