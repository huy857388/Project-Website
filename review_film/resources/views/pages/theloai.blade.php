@extends('layouts.master')
        <!-- /Header -->
@section('content')
        
        
        
        <!-- Content -->
        <section id="content">
            <div class="container">
            	<!-- Main Content -->
                
                <div class="breadcrumbs column">
                	<p><a href="{{url('/')}}">Home.</a>   \\ Thể loại \\   {{$theloai}}</p>
                </div>
                
                <div class="main-content">
                	
                    <!-- Popular News -->
                	<div class="column-two-third">
                    	<div class="outertight m-t-no">
                            <div class="badg">
                                <p><a href="#">TOP 1</a></p>
                            </div>
                            <div class="flexslider">
                                <ul class="slides">
                                    <!-- <li>
                                        <img src="{{url('public/img/trash/25.png')}}" alt="MyPassion" />
                                    </li>
                                    <li>
                                        <img src="{{url('public/img/trash/24.png')}}" alt="MyPassion" />
                                    </li>
                                    <li>
                                        <img src="{{url('public/img/trash/26.png')}}" alt="MyPassion" />
                                    </li> -->
                                    <li>
                                        <img src="{{url('public/news_img/'.$first_news['img'])}}" alt="{{url('public/news_img/'.$first_news['img'])}}" />
                                    </li>
                                     <li>
                                        <img src="{{url('public/news_img/'.$first_news['img'])}}" alt="{{url('public/news_img/'.$first_news['img'])}}" />
                                    </li>
                                     <li>
                                        <img src="{{url('public/news_img/'.$first_news['img'])}}" alt="{{url('public/news_img/'.$first_news['img'])}}" />
                                    </li>
                                </ul>

                            </div>
                            
                            <h6 class="regular"><a href="{{route('single',$first_news['id'])}}">{{$first_news['title']}}</a></h6>
                            <span class="meta">{{$first_news['created_at']}}   \\   <a href="#">No Coments.</a></span>
                            <p>{{$first_news['content']}}</p>
                        </div>
                        
                        <div class="outertight m-r-no m-t-no">
                            <div class="badg">
                                <p><a href="#">TOP 2</a></p>
                            </div>
                            <div class="flexslider">
                                <ul class="slides">
                                    <!-- <li>
                                        <img src="{{url('public/img/trash/27.png')}}" alt="MyPassion" />
                                    </li>
                                    <li>
                                        <img src="{{url('public/img/trash/26.png')}}" alt="MyPassion" />
                                    </li>
                                    <li>
                                        <img src="{{url('public/img/trash/24.png')}}" alt="MyPassion" />
                                    </li> -->
                                    <li>
                                        <img src="{{url('public/news_img/'.$second_news['img'])}}" alt="{{url('public/news_img/'.$second_news['img'])}}" />
                                    </li>
                                    <li>
                                        <img src="{{url('public/news_img/'.$second_news['img'])}}" alt="{{url('public/news_img/'.$second_news['img'])}}" />
                                    </li>
                                    <li>
                                        <img src="{{url('public/news_img/'.$second_news['img'])}}" alt="{{url('public/news_img/'.$second_news['img'])}}" />
                                    </li>
                                    
                                </ul>
                            </div>
                            
                            <h6 class="regular"><a href="{{route('single',$second_news['id'])}}">{{$second_news['title']}}</a></h6>
                            <span class="meta">{{$second_news['created_at']}}   \\   <a href="#">No Coments.</a></span>
                            <p>{{$second_news['content']}}</p>
                        </div>
                        
                        <div class="outerwide">
                        	<ul class="block2">
                                @foreach($ds_news as $news)
                                <li class="m-r-no">
                                    <a href="{{route('single',$news['id'])}}"><img src="{{url('public/news_img/'.$news['img'])}}" alt="MyPassion" class="alignleft" width="75px" height="75px" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="{{route('single',$news['id'])}}">{{$news['title']}}</a>
                                    </p>
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li>
                                @endforeach
                                <!-- <li>
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
                                </li> -->
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
        
       