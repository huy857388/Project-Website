@extends('layouts.master') 
        <!-- /Header -->
@section('content')
        <!-- Slider -->
        <section id="slider">
            <div class="container">
                <div class="main-slider">
                	<div class="badg">
                    	<p><a href="#">HOT</a></p>
                    </div>
                	<div class="flexslider">
                        <ul class="slides">
                            @foreach($ds_hot as $news)
                            
                            <li>
                                <img src="{{url('public/news_img/'.$news['img'])}}" alt="MyPassion" width="450" height="400"/>
                                <p class="flex-caption"><a href="{{route('single',$news['id'])}}">{{$news['title']}}</a> 
                                {{$news['content']}}</p>";
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                
                <div class="slider2">
                	<div class="badg">
                    	<p><a href="#">ĐỀ CỬ</a></p>
                    </div>
 					<?php $rand_key= array_rand($ds_film,3); ?>
                    <a href="{{ route('single',$ds_film[$rand_key[0]]['id']) }}"><img src="{{url('public/news_img/'.$ds_film[$rand_key[0]]['img'])}}" alt="MyPassion" width="400" height="250" /></a>
                    <p class="caption"><a href="{{ route('single',$ds_film[$rand_key[0]]['id']) }}">{{$ds_film[$rand_key[0]]['title']}}</a>{{$ds_film[$rand_key[0]]['content']}} </p>
                </div>
                
                <div class="slider3">
                	<a href="{{route('single',$ds_film[$rand_key[1]]['id'])}}"><img src="{{url('public/news_img/'.$ds_film[$rand_key[1]]['img'])}}" alt="MyPassion" width="200" height="150" /></a>
                    <p class="caption"><a href="{{ route('single',$ds_film[$rand_key[1]]['id']) }}">{{$ds_film[$rand_key[1]]['title']}}</a></p>
                </div>
                
                <div class="slider3">
                    <a href="{{route('single',$ds_film[$rand_key[2]]['id'])}}"><img src="{{url('public/news_img/'.$ds_film[$rand_key[2]]['img'])}}" alt="MyPassion" width="200" height="150" /></a>
                    <p class="caption"><a href="{{ route('single',$ds_film[$rand_key[2]]['id']) }}">{{$ds_film[$rand_key[2]]['title']}}</a></p>

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
<!--                             	<li>
                                	<img src="{{url('public/img/trash/25.png')}}" alt="MyPassion" class="alignleft" />
                                    <h6 class="regular"><a href="#">Blandit Rutrum, Erat et Sagittis. Lorem Ipsum Dolor, Sit Amet Adipsing.</a></h6>
                                    <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                    <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic...</p>
                                </li> -->
                                <!-- chạy dòng for -->
                                <!-- Phần này t làm chưa hoàn chỉnh -->
                                @foreach($ds_hot as $news)
                                <li>
                                    <img src="{{url('public/news_img/'.$news['img'])}}" alt="MyPassion" class="alignleft"  width="600" height="350"/>
                                    <h6 class="regular"><a href="{{ route('single',$news['id']) }}">{{$news['title']}}</a></h6>
                                    <span class="meta">{{$news['created_at']}}   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                    <p>{{$news['content']}}</p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <!-- Phần này ôg chưa chú thích nè, t để tạm các tin đề cử -->
                        <div class="outerwide">
                        	<ul class="block2">
                                @foreach($ds_decu as $news)
                                <li>
                                    <a href="{{ route('single',$news['id']) }}"><img style="width: 75px; height: 75px;" src="{{url('public/news_img/'.$news['img'])}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>{{$news['created_at']}}</span>
                                        <a href="{{ route('single',$news['id']) }}">{{$news['title']}}</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                @endforeach
                               <!--  <li>
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
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- /World News -->
                    
                    
                </div>
                <!-- /Main Content -->
                @stop
                <!-- Left Sidebar -->
                