@extends('layouts.master') 
        <!-- /Header -->
@section('content')
        <!-- Slider -->
        <!-- <section id="slider"> -->
        <section id="1">            
            <div class="container">
                <div class="main-slider">
                	<div class="badg">
                    	<p><a href="#">HOT</a></p>
                    </div>
                	<div class="flexslider">
                        <ul class="slides">
                            @foreach($ds_hot as $news)
                            
                            <li>
                                <img src="{{url('public/news_img/'.$news['img'][0])}}" alt="MyPassion" width="450" height="400"/>
                                <p class="flex-caption"><a href="{{route('showInfo',[$news['TenKhongDau'],$news['slug']])}}">{{$news['title']}}</a> 
                                {{$news['short_content']}}</p>";
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
                    <a href="{{ route('showInfo',[$ds_film[$rand_key[0]]['TenKhongDau'],$ds_film[$rand_key[0]]['slug']]) }}"><img src="{{url('public/news_img/'.$ds_film[$rand_key[0]]['img'][0])}}" alt="MyPassion" width="400" height="250" /></a>
                    <p class="caption"><a href="{{ route('showInfo',[$ds_film[$rand_key[0]]['TenKhongDau'],$ds_film[$rand_key[0]]['slug']]) }}">{{$ds_film[$rand_key[0]]['title']}}</a>{{$ds_film[$rand_key[0]]['short_content']}} </p>
                </div>
                
                <div class="slider3">
                	<a href="{{ route('showInfo',[$ds_film[$rand_key[1]]['TenKhongDau'],$ds_film[$rand_key[1]]['slug']]) }}"><img src="{{url('public/news_img/'.$ds_film[$rand_key[1]]['img'][0])}}" alt="MyPassion" width="200" height="150" /></a>
                    <p class="caption"><a href="{{ route('showInfo',[$ds_film[$rand_key[1]]['TenKhongDau'],$ds_film[$rand_key[1]]['slug']]) }}">{{$ds_film[$rand_key[1]]['title']}}</a></p>
                </div>
                
                <div class="slider3">
                    <a href="{{ route('showInfo',[$ds_film[$rand_key[2]]['TenKhongDau'],$ds_film[$rand_key[2]]['slug']]) }}"><img src="{{url('public/news_img/'.$ds_film[$rand_key[2]]['img'][0])}}" alt="MyPassion" width="200" height="150" /></a>
                    <p class="caption"><a href="{{ route('showInfo',[$ds_film[$rand_key[2]]['TenKhongDau'],$ds_film[$rand_key[2]]['slug']]) }}">{{$ds_film[$rand_key[2]]['title']}}</a></p>

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
                                <!-- chạy dòng for -->
                                <!-- Phần này t làm chưa hoàn chỉnh -->
                                @foreach($ds_hot as $news)
                                <li>
                                    <img src="{{url('public/news_img/'.$news['img'][0])}}" alt="MyPassion" class="alignleft"  width="600" height="350"/>
                                    <h6 class="regular"><a href="{{ route('showInfo',[$news['TenKhongDau'],$news['slug']]) }}">{{$news['title']}}</a></h6>
                                    <span class="meta">{{$news['created_at']}}   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                    <p>{{$news['short_content']}}</p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                                                
                        <div class="outerwide">
                        	<ul class="block2">
                                @foreach($ds_new as $news)
                                <li>
                                    <a href="{{ route('showInfo',[$news['TenKhongDau'],$news['slug']]) }}"><img style="width: 75px; height: 75px;" src="{{url('public/news_img/'.$news['img'][0])}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>{{$news['created_at']}}</span>
                                        <a href="{{ route('showInfo',[$news['TenKhongDau'],$news['slug']]) }}">{{$news['title']}}</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /World News -->                                    
                </div>
                <!-- /Main Content -->
                @stop
                <!-- Left Sidebar -->
                