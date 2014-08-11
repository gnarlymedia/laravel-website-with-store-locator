@extends('layouts.sub')

@section('title')
	{{ Config::get('laravel-blog::meta.index_page.page_title') }}
@endsection

@section('meta_description')
	{{ Config::get('laravel-blog::meta.index_page.meta_description') }}
@endsection

@section('meta_keywords')
	{{ Config::get('laravel-blog::meta.index_page.meta_keywords') }}
@endsection

@section('nav')
    <li class="fadeover"><a href="patient-info">INFO</a></li>
    <li class="fadeover"><a href="google-locations">LOCATIONS</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle fadeover" data-toggle="dropdown">PROCEDURES <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="bone-densitometry-dexa">BONE DENSITOMETRY <span class="font-normal">(</span>DEXA<span class="font-normal">)</span></a></li>
            <li><a href="ct">CT</a></li>
            <li><a href="ct-angiography">CT ANGIOGRAPHY</a></li>
            <li><a href="doppler">DOPPLER ULTRASOUND</a></li>
            <li><a href="echocardiography">ECHOCARDIOGRAPHY</a></li>
            <li><a href="general-x-ray">GENERAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="mammography">MAMMOGRAPHY</a></li>
            <li><a href="mri">MRI</a></li>
            <li><a href="nuclear-medicine">NUCLEAR MEDICINE</a></li>
            <li><a href="ultrasound">ULTRASOUND</a></li>
            <li><a href="platelet-rich-plasma">PLATELET RICH PLASMA</a></li>
            <li><a href="dental-x-ray">DENTAL X<span class="font-normal">-</span>RAY</a></li>
            <li><a href="dexa">BONE MINERAL DENSITOMETRY</a></li>
            <li><a href="cardiac-imaging">CARDIAC IMAGING</a></li>
            <li><a href="opg">OPG</a></li>
        </ul>
    </li>
    <li class="fadeover"><a href="patient-billing">BILLING</a></li>
    <li><a href="#">BLOG</a><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31"></div></li>
    <li class="fadeover"><a href="patient-links">LINKS</a></li>
    <li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
	@include('laravel-blog::partials.list')
	@include('laravel-blog::partials.archives')
    <a class="btn btn-default admin-login-link" href="admin/posts" target="_blank">Blog admin login</a>
@stop