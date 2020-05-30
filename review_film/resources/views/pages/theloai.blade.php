@extends('layouts.master')
        <!-- /Header -->
@section('content')                        
        <!-- Content -->
        <!-- <section id="content"> -->
        <section id="{{$theloai_url}}">
            <div class="container">
            	<!-- Main Content -->                
                <div class="breadcrumbs column">
                	<p><a href="{{url('/')}}">Home.</a>   \\   {{$theloai_url}}</p>
                </div>
                
                <div class="main-content">
                	   
                    <!-- Popular News -->
                	<div class="column-two-third">
                        @if(!empty($first_news))
                    	<div class="outertight m-t-no">
                            <div class="badg">
                                <p><a href="{{route('topComment')}}">TOP COMMENT</a></p>
                            </div>
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="{{url('public/news_img/'.$first_news['img'])}}" alt="{{url('public/news_img/'.$first_news['img'])}}" width="450" height="200" />
                                    </li>
                                     <li>
                                        <img src="{{url('public/news_img/'.$first_news['img'])}}" alt="{{url('public/news_img/'.$first_news['img'])}}" width="450" height="200" />
                                    </li>
                                     <li>
                                        <img src="{{url('public/news_img/'.$first_news['img'])}}" alt="{{url('public/news_img/'.$first_news['img'])}}" width="450" height="200" />
                                    </li>
                                </ul>

                            </div>
                           
                            <h6 class="regular"><a href="{{ route('showInfo',[$first_news['TenKhongDau'],$first_news['slug']]) }}">{{$first_news['title']}}</a></h6>
                            <span class="meta">Ngày cập nhật: {{date("d-m-Y", strtotime($first_news['updated_at']))}}   \\   <a href="#">{{$first_news['count_cmt']}} Coments.</a></span>
                            <p>{{$first_news['content']}}</p>
                        </div>
                         @endif
                         @if(!empty($second_news))
                        <div class="outertight m-r-no m-t-no">
                            <div class="badg">
                                <p><a href="{{route('topComment')}}">TOP COMMENT</a></p>
                            </div>
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="{{url('public/news_img/'.$second_news['img'])}}" alt="{{url('public/news_img/'.$second_news['img'])}}" width="450" height="200" />
                                    </li>
                                    <li>
                                        <img src="{{url('public/news_img/'.$second_news['img'])}}" alt="{{url('public/news_img/'.$second_news['img'])}}"  width="450" height="200"/>
                                    </li>
                                    <li>
                                        <img src="{{url('public/news_img/'.$second_news['img'])}}" alt="{{url('public/news_img/'.$second_news['img'])}}"  width="450" height="200"/>
                                    </li>
                                    
                                </ul>
                            </div>
                            
                            <h6 class="regular"><a href="{{route('showInfo',[$second_news['TenKhongDau'],$second_news['slug']])}}">{{$second_news['title']}}</a></h6>
                            <span class="meta">Ngày cập nhật: {{date("d-m-Y", strtotime($second_news['updated_at']))}}   \\   <a href="#">{{$second_news['count_cmt']}} Coments.</a></span>
                            <p>{{$second_news['content']}}</p>
                        </div>
                        @endif
                        @if(empty($ds_news)) 
                            <p>Ko có tin nào ở thể loại này cả!</p>
                        @else
                        <div class="outerwide">
                        	<ul class="block2">
                               
                                @foreach($ds_news['data'] as $news)
                                <li class="m-r-no">
                                    <a href="{{ route('showInfo',[$news['TenKhongDau'],$news['slug']]) }}"><img src="{{url('public/news_img/'.$news['img'])}}" alt="{{url('public/news_img/'.$news['img'])}}" class="alignleft" width="100px" height="100px" /></a>
                                    <p>
                                        <span>Ngày cập nhật: {{date("d-m-Y", strtotime($news['updated_at']))}} </span>
                                        <a href="{{route('showInfo',[$news['TenKhongDau'],$news['slug']])}}">{{$news['title']}}</a>
                                    </p>                                        
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li>
                                @endforeach
                                                             
                            </ul>
                        </div>
                        
                        <!-- <div class="pager">
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
                        </div> -->
                    	@include('layouts.paginating')
                        @endif  
                    </div>
                    <!-- /Popular News -->
                    
                </div>
                <!-- /Main Content -->
                
                <!-- Left Sidebar -->
                @stop
        <!-- / Content -->
        
       