@extends('layouts.master')
        <!-- /Header -->
@section('content')
        
        <!-- Content -->
        <!-- <section id="content"> -->
        <section id="6">
            <div class="container">
            	<!-- Main Content -->
                <!-- Phần này phải đợi danh mục -->
                <div class="breadcrumbs column">
                	<p><a href="{{url('/')}}">Home.</a>   \\   <a href="#">Categories.</a></p>
                </div>
                
                <div class="main-content">                	
                    <!-- Popular News -->
                    @if(isset($first_news))
                	<div class="column-two-third">
                    	<div class="outertight m-t-no">
                            <div class="badg">
                                <p><a href="#">TOP 1</a></p>
                            </div>
                            <div class="flexslider">
                                <ul class="slides">
                                    @foreach($first_news['img'] as $image)
                                     <li>
                                        <img src="{{url('public/news_img/'.$image)}}" alt="{{url('public/news_img/'.$image)}}"  width="450" height="200" title="{{$first_news['title']}}" />
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <h6 class="regular"><a href="{{route('showInfo',[$first_news['TenKhongDau'],$first_news['slug']])}}">{{$first_news['title']}}</a></h6>                     
                            <span class="meta">Ngày đăng: {{date("d-m-Y", strtotime($first_news['created_at']))    }}  \\   <a href="#">{{$first_news['count']}} Comments.</a></span>
                            <p>{{$first_news['short_content']}}</p>
                        </div>
                        @endif
                        @if(isset($second_news))
                        <div class="outertight m-r-no m-t-no">
                            <div class="badg">
                                <p><a href="#">TOP 2</a></p>
                            </div>
                            <div class="flexslider">
                                <ul class="slides">                                   
                                    @foreach($second_news['img'] as $image)
                                     <li>
                                        <img src="{{url('public/news_img/'.$image)}}" alt="{{url('public/news_img/'.$image)}}"  width="450" height="200" title="{{$second_news['title']}}" />
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <h6 class="regular"><a href="{{route('showInfo',[$second_news['TenKhongDau'],$second_news['slug']])}}">{{$second_news['title']}}</a></h6>
                            <span class="meta">Ngày đăng: {{date("d-m-Y", strtotime($second_news['created_at']))    }}  \\   <a href="#">{{$second_news['count']}} Comments.</a></span>
                            <p>{{$second_news['short_content']}}</p>
                            </div>
                            @endif
                        <div class="outerwide">
                        	<ul class="block2">
                                @foreach($ds_top_news as $key => $news)
                               <li>
                                    <a href="{{route('showInfo',[$news['TenKhongDau'],$news['slug']])}}">
                                        @if($news['img'] != null)
                                        <img style="width: 100px; height: 80px;" src="{{url('public/news_img/'.$news['img'][0])}}" alt="{{url('public/news_img/'.$news['img'][0])}}" class="alignleft" title="{{$news['title']}}" />
                                        @endif
                                    </a>
                                    <p>
                                        <span>TOP {{$key + 3}}</span>
                                        <a href="{{route('showInfo',[$news['TenKhongDau'],$news['slug']])}}">{{$news['title']}}</a>
                                    </p>
                                    <p>{{$news['count'] == 0?'No':$news['count']}} Comments</p>
                                    <!-- <span class="rating"><span style="width:80%;"></span></span> -->
                                </li>
                                @endforeach                              
                            </ul>
                        </div>              
                    </div>
                    <!-- /Popular News -->
                    
                </div>
                <!-- /Main Content -->
                
                <!-- Left Sidebar -->
                @stop
        <!-- / Content -->
        
       