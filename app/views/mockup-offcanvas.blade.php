<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Off Canvas Template for Bootstrap</title>
    
   	{{ HTML::script('/assets/javascript/frontend.js'); }}
   	{{ HTML::script('/assets/javascript/offcanvas.js'); }}
   	
	{{ HTML::style('/assets/stylesheets/combined.css'); }}
   	{{ HTML::style('/assets/stylesheets/offcanvas.css'); }}
   	{{ HTML::style('/assets/stylesheets/mockup_offcanvas.css'); }}

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    
    <div class="row row-offcanvas row-offcanvas-right">
	    <div class="col-xs-6 col-sm-9">
		    <div class="navbar navbar-static-top navbar-inverse" role="navigation">
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="offcanvas">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="#">Project name</a>
		        </div>
		      </div><!-- /.container -->
		    </div><!-- /.navbar -->
		
		    <div class="container">
		      <div class="row">
		        <div class="col-xs-12 col-sm-12">
		          <div class="jumbotron">
		            <h1>Hello, world!</h1>
		            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
		          </div>
		        </div><!--/span-->
		      </div><!--/row-->
	        </div><!-- /.container -->
	      </div><!--/span-->
	      
  		  <div class="sidebar-offcanvas col-xs-6 col-sm-3 navbar-inverse" id="sidebar">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="#">Home</a></li>
	            <li><a href="#about">About</a></li>
	            <li><a href="#contact">Contact</a></li>
	          </ul>
        </div><!-- /.nav-offcanvas -->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>
  </body>
</html>
