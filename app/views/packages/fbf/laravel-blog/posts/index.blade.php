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
    <?php
    if (isset($_GET["type"])) {
        $value = htmlspecialchars($_GET["type"]);
    } else {
        $value = 'patient';
    }
    if (isset($value)) {
        if ($value == 'patient') { ?>
            <!-- Patient nav -->
            <li class="fadeover"><a href="patient-info">INFO</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle fadeover" data-toggle="dropdown">LOCATIONS <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="locations-list">LOCATIONS LIST</a></li>
                    <li><a href="google-locations">LOCATIONS NEAR ME</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle fadeover" data-toggle="dropdown">PROCEDURES <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="bone_densitometry">BONE DENSITOMETRY <span class="font-normal">(</span>DEXA<span class="font-normal">)</span></a></li>
                    <li><a href="ct">CT</a></li>
                    <li><a href="ct_angiography">CT ANGIOGRAPHY</a></li>
                    <li><a href="doppler">DOPPLER ULTRASOUND</a></li>
                    <li><a href="echocardiography">ECHOCARDIOGRAPHY</a></li>
                    <li><a href="general_xray">GENERAL X<span class="font-normal">-</span>RAY</a></li>
                    <li><a href="mammography">MAMMOGRAPHY</a></li>
                    <li><a href="mri">MRI</a></li>
                    <li><a href="nuclear_medicine">NUCLEAR MEDICINE</a></li>
                    <li><a href="ultrasound">ULTRASOUND</a></li>
                    <li><a href="platelet_rich_plasma">PLATELET RICH PLASMA</a></li>
                    <li><a href="dental_x_ray">DENTAL X<span class="font-normal">-</span>RAY</a></li>
                    <li><a href="cardiac_imaging">CARDIAC IMAGING</a></li>
                    <li><a href="opg">OPG</a></li>
                </ul>
            </li>
            <li class="fadeover"><a href="patient-billing">BILLING</a></li>
            <li><a href="#">BLOG</a><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31"></div></li>
            <li class="fadeover"><a href="patient-links">LINKS</a></li>
            <li class="fadeover"><a href="patient-contact">CONTACT</a></li>
        <?php } else { ?>
            <!-- Referrer nav -->
            <li><a href="referrer-info">REFERRER INFORMATION</a></li>
            <li class="fadeover"><a href="referrer-results">RESULTS</a></li>
            <li class="fadeover"><a href="referrer-billing">BILLING</a></li>
            <li><a href="#">BLOG</a><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31"></div></li>
        <?php }
    }?>
@stop

@section('content')
    <h1>Blog</h1>
	@include('laravel-blog::partials.list')
	@include('laravel-blog::partials.archives')
    <a class="btn btn-default admin-login-link" href="admin/posts" target="_blank">Blog admin login</a>
@stop