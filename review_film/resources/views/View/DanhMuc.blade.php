@extends('view.template') 
        <!-- /Header -->
@section('content')
        
        
        
        <!-- Content -->
        <section id="content">
            <div class="container">
            	<!-- Main Content -->
                
                <div class="breadcrumbs column">
                	<p><a href="#">Home.</a>   \\   <a href="#">Categories.</a>   \\   World News.</p>
                </div>
                
                <div class="main-content">
                	
                    <!-- Popular News -->
                	<div class="column-two-third">
                    	<div class="outertight m-t-no">
                            <div class="badg">
                                <p><a href="#">Featured.</a></p>
                            </div>
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="{{url('public/img/trash/25.png')}}" alt="MyPassion" />
                                    </li>
                                    <li>
                                        <img src="{{url('public/img/trash/24.png')}}" alt="MyPassion" />
                                    </li>
                                    <li>
                                        <img src="{{url('public/img/trash/26.png')}}" alt="MyPassion" />
                                    </li>
                                </ul>
                            </div>
                            
                            <h6 class="regular"><a href="single.html">Blandit Rutrum, Erat et Sagittis. Lorem
Ipsum Dolor, Sit Amet Adipsing.</a></h6>
                            <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic. Lorem ipsum 
dolor adipcising elit. Erat egestan sagittis lorem aupo dolor sit ameta, auctor libero tempor...</p>
                        </div>
                        
                        <div class="outertight m-r-no m-t-no">
                            <div class="badg">
                                <p><a href="#">Featured.</a></p>
                            </div>
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="{{url('public/img/trash/27.png')}}" alt="MyPassion" />
                                    </li>
                                    <li>
                                        <img src="{{url('public/img/trash/26.png')}}" alt="MyPassion" />
                                    </li>
                                    <li>
                                        <img src="{{url('public/img/trash/24.png')}}" alt="MyPassion" />
                                    </li>
                                </ul>
                            </div>
                            
                            <h6 class="regular"><a href="single.html">Blandit Rutrum, Erat et Sagittis. Lorem
Ipsum Dolor, Sit Amet Adipsing.</a></h6>
                            <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic. Lorem ipsum 
dolor adipcising elit. Erat egestan sagittis lorem aupo dolor sit ameta, auctor libero tempor...</p>
                        </div>
                        
                        <div class="outerwide">
                        	<ul class="block2">
                                <li>
                                    <a href="single.html"><img src="{{url('public/img/trash/5.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="single.html">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li class="m-r-no">
                                    <a href="single.html"><img src="{{url('public/img/trash/6.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="single.html">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li>
                                
                                <li class="m-r-no">
                                    <a href="single.html"><img src="{{url('public/img/trash/20.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="single.html">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:60%;"></span></span>
                                </li>
                                <li>
                                    <a href="single.html"><img src="{{url('public/img/trash/21.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="single.html">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li class="m-r-no">
                                    <a href="single.html"><img src="{{url('public/img/trash/22.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="single.html">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li>

                            </ul>
                        </div>
                        
                        <div class="pager">
                            <ul>
                            	<li><a href="#" class="first-page"></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#" class="active">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#" class="last-page"></a></li>
                            </ul>
                        </div>
                    	
                    </div>
                    <!-- /Popular News -->
                    
                </div>
                <!-- /Main Content -->
                
                <!-- Left Sidebar -->
                @stop
        <!-- / Content -->
        
       