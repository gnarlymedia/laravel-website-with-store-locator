@extends('layouts.navbar')

@section('head')
	<title>Logged out</title>
@stop

@section('nav')
	<li><a href="/">Home</a></li>
	
    <li class="active" class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patient Portal <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="/patients-home">Home</a></li>
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          <li><a href="/patient-portal">Patient Portal</a></li>
          <li><a href="/patient-details">Patient Details</a></li>
          <li class="active"><a href="/logout">Log Out</a></li>
        </ul>
	</li>
    <li><a href="/google-locations">Locations</a></li>
    <li><a href="/blog">Blog</a></li>
@stop

@section('content')
	<p>You have successfully logged out</p>
@stop