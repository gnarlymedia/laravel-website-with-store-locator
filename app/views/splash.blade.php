<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <!-- Compiled -->
    {{ HTML::script('/assets/javascript/frontend.js') }}
    {{ HTML::style('/assets/stylesheets/combined.css') }}

    <!-- Extras -->
    {{ HTML::script('/assets/javascript/jquery.vegas.min.js') }}
    {{ HTML::script('/assets/javascript/activate-vegas.js') }}
    {{ HTML::style('/assets/stylesheets/jquery.vegas.min.css') }}

    <title>Capital Radiology</title>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="patients_referrers" class="row">
    <img src="/assets/images/logo/capital_radiology.png" alt="capital_radiology" width="240" height="76" id="logo" class="img-responsive center-block shadowed"/>
    <ul class="nav navbar-nav">
        <li class="fadeover shadowed"><a href="referrer-info" id="patient_button">REFERRER INFORMATION</a></li>
        <div id="right"></div>
        <li class="fadeover shadowed"><a href="patient-info" id="referrer_button">PATIENT INFORMATON</a></li>
    </ul>
</div>

<div class="row" id="footer-splash">
    <div id="social-splash" class="col-md-7 col-sm-7 col-xs-12">
        <a href="#"><img src="/assets/images/social/pngs/Color/Facebook.png" alt="Facebook" width="33" height="32"></a>
        <a href="#"><img src="/assets/images/social/pngs/Color/Twitter.png" alt="Twitter" width="33" height="33"></a>
        <a href="#"><img src="/assets/images/social/pngs/Color/YouTube.png" alt="YouTube" width="33" height="32"></a>
    </div>
    <div id="copyright-splash" class="col-md-5 col-sm-5 col-xs-12">
        Copyright (©) 2011-2014 Capital Radiology
    </div>
    <svg height="0" xmlns="http://www.w3.org/2000/svg">
        <filter id="drop-shadow">
            <feGaussianBlur in="SourceAlpha" stdDeviation="2.2"/>
            <feOffset dx="12" dy="12" result="offsetblur"/>
            <feFlood flood-color="rgba(0,0,0,0.5)"/>
            <feComposite in2="offsetblur" operator="in"/>
            <feMerge>
                <feMergeNode/>
                <feMergeNode in="SourceGraphic"/>
            </feMerge>
        </filter>
    </svg>
</div>

<!-- Olark chatbox -->
<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
        f[z]=function(){
            (a.s=a.s||[]).push(arguments)};var a=f[z]._={
        },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
            f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
            0:+new Date};a.P=function(u){
            a.p[u]=new Date-a.p[0]};function s(){
            a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
            hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
            return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
            b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
            b.contentWindow[g].open()}catch(w){
            c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
            var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
            b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
        loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
    /* custom configuration goes here (www.olark.com/documentation) */
    olark.identify('8438-726-10-3224');/*]]>*/</script><noscript><a href="https://www.olark.com/site/8438-726-10-3224/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
</body>
</html>