@extends('layouts.sub')

@section('head')
	<title>Patients - Procedures</title>
@stop

@section('nav')
	<li class="fadeover"><a href="patient-info">INFO</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle fadeover" data-toggle="dropdown">LOCATIONS <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="locations-list">LOCATIONS LIST</a></li>
            <li><a href="google-locations">LOCATIONS NEAR ME</a></li>
        </ul>
    </li>
	<li><a href="#">PROCEDURES</a><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31">
        </div></li>
	<li class="fadeover"><a href="patient-billing">BILLING</a></li>
	<li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
    <p>&nbsp;</p>
    <p>At Capital Radiology we offer premium level imaging and treatment services to the sporting and wider community meaning that you can have access to the same high quality imaging services, personnel, expertise and treatments as Australia’s elite athletes. We are open extended hours during the week and on weekends and free patient parking is available onsite. We invite you to contact us for more information, enquiries or bookings on 1300 X-RAY (9729).</p>
@stop