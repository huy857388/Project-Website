<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Đánh giá phim để lựa chọn những bộ phim đáng xem nhất!">
<meta name="author" content="Nhóm 1 - Xây dựng ứng dụng WEB">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Great Movies</title>

<link rel="shortcut icon" href="{{ url('public/img/sms-4.ico')}}" />

<!-- STYLES -->

<link rel="stylesheet" type="text/css" href="{{ url('public/css/superfish.css') }}" media="screen"/>
<link rel="stylesheet" type="text/css" href="{{ url('public/css/superfish.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ url('public/css/fontello/fontello.css') }}" />

<link rel="stylesheet" type="text/css" media="screen" href="{{ url('public/css/flexslider.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ url('public/css/ui.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ url('public/css/base.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ url('public/css/style.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ url('public/css/960.css') }}"/>

<link rel="stylesheet" type="text/css" href="{{ url('public/css/devices/1000.css')}}" media="only screen and (min-width: 768px) and (max-width: 1000px)" />
<link rel="stylesheet" type="text/css" href="{{ url('public/css/devices/767.css')}}" media="only screen and (min-width: 480px) and (max-width: 767px)" />
<link rel="stylesheet" type="text/css" href="{{ url('public/css/devices/479.css')}}" media="only screen and (min-width: 200px) and (max-width: 479px)" />
<!--[if lt IE 9]> <script type="text/javascript" src="js/customM.js"></script> <![endif]-->
<!-- <script type="text/javascript" src="{{url('public/js/customM.js')}}"></script> -->
<!-- <link rel="stylesheet" type="text/css" href="{{ url('public/bootstrap/css/bootstrap.min.css')}}"> -->

<!-- SCRIPTS -->
<script type="text/javascript" src="{{url('public/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/easing.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/1.8.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/ui.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/carouFredSel.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/superfish.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/customM.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/jtwt.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/jflickrfeed.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/mobilemenu.js')}}"></script>
<!--[if lt IE 9]> <script type="text/javascript" src="js/html5.js"></script> <![endif]-->
<script type="text/javascript" src="{{url('public/js/mypassion.js')}}"></script>
<!-- <script type="text/javascript" src="{{url('public/bootstrap/js/bootstrap.js')}}"></script> -->
</head>

<body>

<!-- Body Wrapper -->
<div class="body-wrapper">
	<div class="controller">
    <div class="controller2">

        <!-- Header -->
        <header id="header">
            <div class="container">
                <div class="column">
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="{{url('public/img/lo.png')}}" alt="MyPassion" /></a>
                    </div>
                    
                    @include('layouts.search')
                   
                    @include('layouts.menu')
                </div>
            </div>
        </header>
        <!-- /Header -->