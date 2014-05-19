@extends('layouts.navbar')

@section('head')
	<title>Patient details</title>
@stop

@section('nav')
	<li><a href="/">Home</a></li>
	
    <li class="active" class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patient Portal <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="/patients-home">Home</a></li>
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          <li class="active"><a href="/patient-portal">Patient Portal</a></li>
          <li><a href="/patient-details">Patient Details</a></li>
          <li><a href="/logout">Log Out</a></li>
        </ul>
	</li>
@stop

@section('content')
	<h1>Patient details</h1>
	<p>&nbsp;</p>

	@if($patient)
		
		<h2>Var dump: $patient</h2>
		{{ var_dump($patient) }}
		
	@else
		<h2>Patient information could not be retrieved</h2>
	@endif
	
	@if(!Session::has('message'))
		{{ Session::put('message', 'test'); }}
	@endif
	
	@if(Session::has('message'))
	    <script type="text/javascript">
	        $(document).ready(function() {
	            $('#popOverLogin').popover('show');
	            setTimeout(function() {
	                $('#popOverLogin').popover('hide');
	            }, 6000);
	        });
	    </script>
	@endif
@stop