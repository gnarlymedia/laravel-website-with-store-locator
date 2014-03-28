@extends('layouts.navbar')

@section('head')
	<title>Home</title>
	{{ HTML::style('/assets/stylesheets/carousel.css'); }}
@stop

@section('nav')
      <li class="active"><a href="/navbar/home">Home</a></li>
      <li><a href="/navbar/about">About</a></li>
      <li><a href="/navbar/contact">Contact</a></li>
@stop

@section('content')
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="/assets/images/iStock_1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Capital radiology</h1>
              <p>The most amazing radiology company you've ever heard of.</p>
              <p><a class="btn btn-lg btn-primary" href="/navbar/home" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/assets/images/iStock_2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>The best of the best.</h1>
              <p>We really are the best. Of the best.</p>
              <p><a class="btn btn-lg btn-primary" href="/navbar/home" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/assets/images/iStock_3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>For the whole family.</h1>
              <p>We don't leave anyone out.</p>
              <p><a class="btn btn-lg btn-primary" href="/navbar/home" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    
    <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="/navbar/home" role="button">View navbar docs &raquo;</a>
        </p>
      </div>
@stop