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
                    
                    <div class="search">
                        <form action="#" method="post">
                            <input type="text" value="Search." onblur="if(this.value=='') this.value='Search.';" onfocus="if(this.value=='Search.') this.value='';" class="ft"/>
                            <input type="submit" value="" class="fs">
                        </form>
                    </div>
                    
                    <!-- Nav -->
                    <nav id="nav">
                        <ul class="sf-menu">
                            <li class="current"><a href="index-2.html">TRANG CHỦ</a></li>
                            <li><a href="reviews.html">HOT</a></li>
                            <li><a href="reviews.html">NEW</a></li>
                            <li>

                            	<a href="#">THỂ LOẠI</a>
                                <ul>
                                    <li><i class="icon-right-open"></i><a href="leftsidebar.html">KINH DỊ</a></li>
                                    <!-- Viết dòng for để liệt kê thể loại -->
                                </ul>
                            </li>
                            <li><a href="reviews.html">TOP RATED MOVIES</a></li>
                            <li><a href="reviews.html">ĐỀ CỬ</a></li>
                         <!--   <li>
                                <a href="reviews.html">LỊCH.</a>
                                <ul>
                                    <li><i class="icon-right-open"></i><a href="#">LỊCH CHIẾU PHIM.</a>
                                        <ul>
                                            <li><i class="icon-right-open"></i><a href="#">CGV CINIME.</a></li>
                                            <li><i class="icon-right-open"></i><a href="#">BHD CINIME.</a></li>
                                            <li><i class="icon-right-open"></i><a href="#">LOTTE CINIME.</a></li>
                                        </ul>
                                    </li> 
                                    <li><i class="icon-right-open"></i><a href="#">LỊCH TRÌNH.</a></li>
                                </ul>
                            </li> -->
                            <li><a href="contact.html">ĐĂNG NHẬP</a></li>  
                              <li><a href="contact.html">ĐĂNG KÍ</a></li>                        
                        </ul>
                        
                    </nav>
                    <!-- /Nav -->
                </div>
            </div>
        </header>
        <!-- /Header -->
        
        <!-- Slider -->
        <section id="slider">
            <div class="container">
                <div class="main-slider">
                	<div class="badg">
                    	<p><a href="#">HOT</a></p>
                    </div>
                	<div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{url('public/img/flexslider/1.png')}}" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Google wants more women in tech.</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                            <li>
                                <img src="{{url('public/img/flexslider/3.png')}}" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Small Businesses Surge against all expectations.</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                            <li>
                                <img src="{{url('public/img/flexslider/5.png')}}" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Drones: Future of disaster response?</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                            <li>
                                <img src="{{url('public/img/flexslider/4.png')}}" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Hollywood cowboys' retreat. </a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                            <li>
                                <img src="{{url('public/img/flexslider/2.png')}}" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Stress may cause cravings.</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="slider2">
                	<div class="badg">
                    	<p><a href="#">ĐỀ CỬ</a></p>
                    </div>
                    <a href="#"><img src="{{url('public/img/flexslider/6.png')}}" alt="MyPassion" /></a>
                    <p class="caption"><a href="#">We Are News.</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed metus. </p>
                </div>
                
                <div class="slider3">
                	<a href="#"><img src="{{url('public/img/trash/3.png')}}" alt="MyPassion" /></a>
                    <p class="caption"><a href="#">Happy Birthday, blue jeans! </a></p>
                </div>
                
                <div class="slider3">
                	<a href="#"><img src="{{url('public/img/trash/4.png')}}" alt="MyPassion" /></a>
                    <p class="caption"><a href="#">Fantasy Family Photos </a></p>
                </div>
                
            </div>    
        </section>
        <!-- / Slider -->
        
        <!-- Content -->
        <section id="content">
            <div class="container">
            	<!-- Main Content -->
                <div class="main-content">
                    
                    <!-- World News -->
                    <div class="column-two-third">
                    	<h5 class="line">
                        	<span>TOP RATED MOVIES </span>
                            <div class="navbar">
                                <a id="next2" class="next" href="#"><span></span></a>	
                                <a id="prev2" class="prev" href="#"><span></span></a>
                            </div>
                        </h5>
                        
                        <div class="outerwide" >
                        	<ul class="wnews" id="carousel2">
                            	<li>
                                	<img src="{{url('public/img/trash/25.png')}}" alt="MyPassion" class="alignleft" />
                                    <h6 class="regular"><a href="#">Blandit Rutrum, Erat et Sagittis. Lorem Ipsum Dolor, Sit Amet Adipsing.</a></h6>
                                    <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                    <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic...</p>
                                </li>
                                <!-- chạy dòng for -->
                            </ul>
                        </div>
                        
                        <div class="outerwide">
                        	<ul class="block2">
                                <li>
                                    <a href="#"><img src="{{url('public/img/trash/17.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li class="m-r-no">
                                    <a href="#"><img src="{{url('public/img/trash/18.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /World News -->
                    
                    
                </div>
                <!-- /Main Content -->
                
                <!-- Left Sidebar -->
                <div class="column-one-third">                
                    
                 <div class="sidebar">
                        <div id="tabs">
                            <ul>
                                <li><a href="#tabs1">NEW</a></li>
                                <li><a href="#tabs2">HOT</a></li>
                                <li><a href="#tabs3">BÌNH LUẬN</a></li>
                            </ul>
                            <div id="tabs1">
                                <ul><!--chạy for max 4 cái-->
                                    <li>
                                        <a href="#" class="title">Blandit Rutrum, Erat et Sagittis Adipcising Elit.</a>
                                        <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                    <li>
                                        <a href="#" class="title">Blandit Rutrum, Erat et Sagittis Adipcising Elit.</a>
                                        <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                </ul>
                            </div>
                            <div id="tabs2">
                                <ul>
                                    <!--chạy for max 4 cái-->
                                    <li>
                                        <a href="#" class="title">Mauris eleifend est et turpis. Duis id erat.</a>
                                        <span class="meta">27 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                    <li>
                                        <a href="#" class="title">Mauris eleifend est et turpis. Duis id erat.</a>
                                        <span class="meta">27 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                </ul>
                            </div>
                            <div id="tabs3">
                                <ul>
                                    <!--chạy for max 4 cái-->
                                    <li>
                                        <a href="#" class="title"><strong>Someone:</strong> eleifend est et turpis. Duis id erat.Mauris eleifend est et turpis. Duis id erat.</a>
                                    </li>
                                    <li>
                                        <a href="#" class="title"><strong>Someone:</strong> eleifend est et turpis. Duis id erat.Mauris eleifend est et turpis. Duis id erat.</a>
                                    </li>
                                    <li>
                                        <a href="#" class="title"><strong>Someone:</strong> eleifend est et turpis. Duis id erat.Mauris eleifend est et turpis. Duis id erat.</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <!-- /Left Sidebar -->
                
            </div>    
        <!-- / Content -->
        
        <!-- Footer -->
       <footer id="footer">
            <div class="container">
                <div class="column-one-fourth">
                    <div class="logo">
                        <a href="index-2.html"><img src="{{url('public/img/lo.png')}}" alt="MyPassion" /></a>
                    </div>
                </div>
                <div class="column-one-fourth">
                    <h5 class="line"><span>LIÊN HỆ</span></h5>
                    <div class="twitterfeed">
                        <div id="tweets"></div>
                    </div>
                </div>
                <div class="column-one-fourth">
                   <h5 class="line"><span>THỂ LOẠI.</span></h5>
                    <ul class="footnav"><!-- chạy dòng for -->
                        <li><a href="#"><i class="icon-right-open"></i> KINH DỊ</a></li>
                    </ul>
                </div>
                <div class="column-one-fourth">
                    <h5 class="line"><span>GIỚI THIỆU</span></h5>
                    <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhon cus sem purus eu sapien. Lorem ipsum dolor sit amet adipcising elit. Elit norem simuls tortor lorem adipcising purus mosteu dsapien egestas.</p>
                </div>
                <p class="copyright">Nhóm 1</p>
            </div>
        </footer>
        <!-- / Footer -->
   
    </div>
	</div>
</div>
<!-- / Body Wrapper -->


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
<script type="text/javascript" src="{{url('public/bootstrap/js/boostrap.js')}}"></script>

</body>
</html>
