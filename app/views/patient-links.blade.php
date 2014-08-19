@extends('layouts.sub')

@section('head')
	<title>Patients - Patient Information</title>
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
    <li class="fadeover"><a href="blog">BLOG</a></li>
    <li class="fadeover"><a href="patient-links">LINKS</a><div id="pointer" class="hidden-xs"><img src="/assets/images/elements/glyphicon.png" alt="glyphicon" width="31" height="31"></div></li>
	<li class="fadeover"><a href="patient-contact">CONTACT</a></li>
@stop

@section('content')
    <div class="row">
        <img src="/assets/images/istock/flower-sm.jpg" alt="flower" class="body-images-right img-responsive" >
        <?php $links = Link::where(Link::STATUS, '=', Link::APPROVED)->paginate(5); ?>

        <div class="container">
            <?php foreach ($links as $link): ?>
                    <h2><?php echo $link->title; ?></h2>
                    <a href="<?php echo $link->url; ?>" target="_blank"><?php echo $link->content; ?></a>
            <?php endforeach; ?>
        </div>

        <?php echo $links->links(); ?>
    </div>
    <a class="btn btn-default admin-login-link" href="admin/links" target="_blank">Link admin login</a>
@stop