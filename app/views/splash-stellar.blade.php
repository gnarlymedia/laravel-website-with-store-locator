@extends('layouts.splash-stellar')

@section('head')
	<title>Splash Stellar</title>
   	{{ HTML::script('/assets/javascript/activate_stellar.js'); }}
@stop

@section('nav')
<div class="container stellar" data-stellar-ratio="0.15" data-stellar-vertical-offset="0">
	<!-- Static navbar -->
	<div class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="#">Capital Radiology</a>
	  </div>
	  <div class="navbar-collapse collapse">
	    <ul class="nav navbar-nav">
			<li class="active"><a href="/theme/home">Home</a></li>
			<li><a href="/theme/about">About</a></li>
			<li><a href="/theme/contact">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="./">Default</a></li>
          <li><a href="../navbar-static-top/">Static top</a></li>
          <li><a href="../navbar-fixed-top/">Fixed top</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </div>
</div>
@stop

@section('content')
    <div class="theme-showcase">
	  <div id="background-image" class="stellar" data-stellar-ratio="0.2" data-stellar-vertical-offset="470">
		  <img src="/assets/images/iStock_5.jpg" alt="iStock_5" width="1600" height="1600" />
	  </div>
    </div>

	<div id="patients_referrers" class="stellar" data-stellar-ratio="0.75" data-stellar-vertical-offset="0">
		<a href="/patients-home">
			<div id="patients">
				<img data-src="holder.js/200x200" class="img-thumbnail" alt="Patients">
				<h1>Patients</h1>
			</div>
		</a>
		<a href="http://cap-rad-grunt.local/theme/home">
			<div id="referrers">
				<img data-src="holder.js/200x200" class="img-thumbnail" alt="Patients">
				<h1>Referrers</h1>
			</div>
		</a>
	</div>

	<div role="main" id="about-us-container">
		<div id="glyphicon">
	    	<span class="glyphicon glyphicon-chevron-down"></span>
	    </div>
	
	    <div id="about-us-panel">
		  <h1>About Us</h1>
		  
		  <div>
  		  	<img src="/assets/images/iStock_6.jpg" alt="iStock_6" width="200" height="200" class="sidebar-right sub-image" />
			  <p>From a genesis of a single clinic created in 1999, Capital Radiology has brought together private service providers and through organic growth to become Victoria’s second largest provider network of Diagnostic Imaging facilities.</p>
			  <p>With facilities across the Melbourne metropolitan area and rural Victoria, led by Specialist Diagnostic Imaging Consultants, Capital Radiology provide comprehensive diagnostic support to referring clinicians and patients across all imaging modalities.</p>
			  <p>With a philosophy of putting the patient first, we provide fast, reliable quality diagnostic imaging. With many scans Bulk Billed, Capital Radiology is the affordable choice for patients and referring clinicians.</p>
		  </div>
		  
		  <div class="clear">
			  <div class="page-header">
		        <h1>Alerts</h1>
			  </div>
		      <div class="alert alert-success">
		        <strong>Well done!</strong> You successfully read this important alert message.
		      </div>
		      <div class="alert alert-info">
		        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
		      </div>
		      <div class="alert alert-warning">
		        <strong>Warning!</strong> Best check yo self, you're not looking too good.
		      </div>
		      <div class="alert alert-danger">
		        <strong>Oh snap!</strong> Change a few things up and try submitting again.
		      </div>
		  </div>
    </div>
@stop