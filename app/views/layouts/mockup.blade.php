<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

   	{{ HTML::script('/assets/javascript/frontend.js'); }}
   	
	{{ HTML::style('/assets/stylesheets/combined.css'); }}
   	{{ HTML::style('/assets/stylesheets/mockup.css'); }}
   	
	@yield('head')

    <!-- Bootstrap core CSS -->
<!--     <link href="../../dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
<!--     <link href="navbar.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  	<div id="nav-container">
      <!-- Static navbar -->
      <div class="navbar" role="navigation">
        <div class="container" id="no-wrap">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/assets/images/logo/logo_sm.png" alt="capital_radiology" width="113" height="36" class="img-responsive"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            
   			  @yield('nav')

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
       	<div id="popOverLogin" rel="popover" data-placement="bottom" data-original-title="Notification!"
	      @if (Session::has('message'))
	         data-content="{{ Session::get('message') }}"
	      @endif >
	    </div>
      </div>
      <div id="pointer">
    	<img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31">
      </div>
  	</div>
    <div class="container">

	@yield('content', 'This content could not be found')

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<!--     <script src="../../dist/js/bootstrap.min.js"></script> -->
  </body>
</html>
