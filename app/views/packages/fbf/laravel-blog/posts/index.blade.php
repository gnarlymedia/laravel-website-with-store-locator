@extends('layouts.navbar')

@section('title')
	{{ Config::get('laravel-blog::meta.index_page.page_title') }}
@endsection

@section('nav')
<li><a href="/">Home</a></li>

<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patient Portal <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="/patients-home">Home</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
        <li><a href="/patient-portal">Patient Portal</a></li>
        <li><a href="/patient-details">Patient Details</a></li>
        <li><a href="/logout">Log Out</a></li>
    </ul>
</li>
<li><a href="/google-locations">Locations</a></li>
<li class="active"><a href="/blog">Blog</a></li>
@stop

@section('meta_description')
	{{ Config::get('laravel-blog::meta.index_page.meta_description') }}
@endsection

@section('meta_keywords')
	{{ Config::get('laravel-blog::meta.index_page.meta_keywords') }}
@endsection

@section('content')
	@include('laravel-blog::partials.list')
	@include('laravel-blog::partials.archives')
@stop