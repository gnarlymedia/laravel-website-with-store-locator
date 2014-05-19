@extends('layouts.navbar')

@section('head')
	<title>Patient portal</title>
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
          <li class="active"><a href="/patient-details">Patient Details</a></li>
          <li><a href="/logout">Log Out</a></li>
        </ul>
	</li>
@stop

@section('content')
	<h1>Patient details</h1>
	
	<p>&nbsp;</p>
	
	@if ($patient)
	
		<h2>Your details</h2>
		
	@if($errors->any())
	  <ul>
	    {{ implode('', $errors->all('<li>:message</li>'))}}
	  </ul>
	@endif


	{{ Form::model($patient, array('route' => array('patient.update', $patient->id), 'method' => 'put')) }}
	
	<p>
		{{ Form::label('medicareNumber', 'Medicare number') }}
		{{ Form::text('medicareNumber') }}
	</p>
	<p>
		{{ Form::label('DOB', 'Date of birth') }}
		{{ Form::text('DOB', null, array('placeholder'=>Config::get('constants.msg_form_field_not_found'))) }}
	</p>
	<p>
		{{ Form::label('firstName', 'First Name') }}
		{{ Form::text('firstName', null, array('placeholder'=>Config::get('constants.msg_form_field_not_found'))) }}
	</p>
	<p>
		{{ Form::label('surname', 'Surname') }}
		{{ Form::text('surname', null, array('placeholder'=>Config::get('constants.msg_form_field_not_found'))) }}
	</p>
	<p>
		{{ Form::label('otherNames', 'Other names') }}
		{{ Form::text('otherNames', null, array('placeholder'=>Config::get('constants.msg_form_field_not_found'))) }}
	</p>
	<p>
		{{ Form::label('phoneNumber', 'Phone number') }}
		{{ Form::text('phone_number', null, array('placeholder'=>Config::get('constants.msg_form_field_not_found'))) }}
	</p>
	<p>
		{{ Form::label('mobilePhone', 'Mobile phone number') }}
		{{ Form::text('mobilePhone', null, array('placeholder'=>Config::get('constants.msg_form_field_not_found'))) }}
	</p>
	<p>
		{{ Form::label('workPhone', 'Work phone number') }}
		{{ Form::text('workPhone', null, array('placeholder'=>Config::get('constants.msg_form_field_not_found'))) }}
	</p>
	<p>
		{{ Form::label('faxNumber', 'Fax number') }}
		{{ Form::text('faxNumber', null, array('placeholder'=>Config::get('constants.msg_form_field_not_found'))) }}
	</p>
	<p>
		{{ Form::label('email', 'Email address') }}
		{{ Form::email('email', null, array('placeholder'=>Config::get('constants.msg_form_field_not_found'))) }}
	</p>
	<p>
		{{ Form::label('address', 'Address') }}
		{{ Form::textarea('address', null, array('placeholder'=>Config::get('constants.msg_form_field_not_found'), 'size' => '60x3')) }}
	</p>
	<p>{{ Form::submit('Submit') }}
	</p>
	 
	{{ Form::close() }}
	
	<h3>var_dump($patient['attributes'])</h3>
	{{ var_dump($patient['attributes']) }}
		
	@else
		<h2>Your information could not be retrieved</h2>
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