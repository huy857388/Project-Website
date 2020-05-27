@extends('layouts.master')
        <!-- /Header -->
@section('content')
        
        <!-- Content -->
        <section id="content">
            <div class="container">
            	<!-- Main Content -->
                <!-- Phần này phải đợi danh mục -->
                <div class="breadcrumbs column">
                    <p class="copyright">Tim kiếm với từ khoá: <strong>{{$tu_khoa}}</strong></p>
                	<p>
                        <a href="{{url('/')}}">Home. </a>
                        \\ <a href="#">News</a>
                    </p>

                </div>
                
                <div class="main-content">                	
                    <!-- Popular News -->
                	<div class="column-two-third">
                    	<!-- <div class="outertight m-t-no">
                            <div class="badg">
                                <p><a href="#">TOP 1</a></p>
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
                            
                            <h6 class="regular"><a href="#">Title</a></h6>
                            <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>                        
                        </div> -->                        
                        <!-- <div class="outertight m-r-no m-t-no">
                            <div class="badg">
                                <p><a href="#">TOP 2</a></p>
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
                        </div> -->
                        <div class="outerwide">
                        	<ul class="block2">  
                                @foreach($ds_news as $news)
                                <li>
                                    <a href="single.html"><img src="{{url('public/news_img/'.$news['img'])}}" alt="MyPassion" class="alignleft" width="100px" height="100px" /></a>
                                    <p>
                                        <span>Thể loại: {{$news['Ten']}}</span>
                                        <a href="{{route('showInfo',[$news['TenKhongDau'],$news['slug']])}}">{{$news['title']}}</a>
                                    </p>
                                    <!-- Phân này nhỏ wa' hiển thị bị lệch style -->
                                    <!-- <p>Tóm tắt nội dung</p> -->
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                @endforeach                              
                                <!-- <li>
                                    <a href="single.html"><img src="{{url('public/img/trash/5.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>TOP 3</span>
                                        <a href="single.html">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li class="m-r-no">
                                    <a href="single.html"><img src="{{url('public/img/trash/6.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>TOP 4</span>
                                        <a href="single.html">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li>
                                 <li>
                                    <a href="single.html"><img src="{{url('public/img/trash/21.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>TOP 5</span>
                                        <a href="single.html">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li class="m-r-no">
                                    <a href="single.html"><img src="{{url('public/img/trash/20.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>TOP 6</span>
                                        <a href="single.html">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:60%;"></span></span>
                                </li>
                                <li>
                                    <a href="single.html"><img src="{{url('public/img/trash/21.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>TOP 7</span>
                                        <a href="single.html">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li class="m-r-no">
                                    <a href="single.html"><img src="{{url('public/img/trash/22.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>TOP 8</span>
                                        <a href="single.html">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li>
                                 <li>
                                    <a href="single.html"><img src="{{url('public/img/trash/21.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>TOP 9</span>
                                        <a href="single.html">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li class="m-r-no">
                                    <a href="single.html"><img src="{{url('public/img/trash/22.png')}}" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>TOP 10</span>
                                        <a href="single.html">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- /Popular News -->                    
                </div>
                <!-- /Main Content -->            
                <!-- Left Sidebar -->
                @stop
        <!-- / Content -->
        
       