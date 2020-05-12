<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="News - Clean HTML5 and CSS3 responsive template">
<meta name="author" content="MyPassion">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Great Movies</title>

<link rel="shortcut icon" href="img/sms-4.ico" />

<!-- STYLES -->
<link rel="stylesheet" type="text/css" href="{{ url('public/css/superfish.css') }}" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/fontello/fontello.css" href="{{ url('public/css/superfish.css') }}"/>
<link rel="stylesheet" type="text/css" media="screen" href="{{ url('public/css/flexslider.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ url('public/css/ui.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ url('public/css/base.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ url('public/css/style.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ url('public/css/960.css') }}"/>

<link rel="stylesheet" type="text/css" href="css/devices/1000.css" media="only screen and (min-width: 768px) and (max-width: 1000px)" />
<link rel="stylesheet" type="text/css" href="css/devices/767.css" media="only screen and (min-width: 480px) and (max-width: 767px)" />
<link rel="stylesheet" type="text/css" href="css/devices/479.css" media="only screen and (min-width: 200px) and (max-width: 479px)" />
<!--[if lt IE 9]> <script type="text/javascript" src="js/customM.js"></script> <![endif]-->
<link rel="stylesheet" type="text/css" href="{{ url('public/boostrap/css/boostrap.css')}}">

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
                        <a href="index-2.html"><img src="{{url('public/img/lo.png')}}" alt="MyPassion" /></a>
                    </div>
                    
                    @include('layouts.search')
                   
                    @include('layouts.menu')
                </div>
            </div>
        </header>
        <!-- /Header -->