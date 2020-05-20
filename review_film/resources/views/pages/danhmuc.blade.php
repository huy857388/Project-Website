@extends('layouts.master')
        <!-- /Header -->
@section('content')
        
        
        
        <!-- Content -->
        <section id="content">
            <div class="container">
            	<!-- Main Content -->
                
                <div class="breadcrumbs column">
                    <p><a href="{{url('/')}}">Home</a>   \\    {{$danhmuc}}</p>
                </div>
                
                <div class="main-content">
                	
                    <!-- Popular News -->
                	<div class="column-two-third">
                    	<div class="outertight m-t-no">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="{{url('public/news_img/'.$ds_film[0]['img'])}}" alt="MyPassion"  width="450" height="200"/>
                                    </li>
                                </ul>
                            </div>
                            
                              <h6 class="regular"><a href="{{ route('showInfo',[$ds_film[0]['TenKhongDau'],$ds_film[0]['slug']]) }}">{{$ds_film[0]['title']}}</a></h6>
                            <span class="meta">{{$ds_film[0]['created_at']}}   \\   <a href="#">No Coments.</a></span>
                            <p>{{$ds_film[0]['content']}}</p>  </div>
                        
                        <div class="outertight m-r-no m-t-no">
                            <div class="flexslider">
                                <ul class="slides">
                                   
                                    <li>
                                        <img src="{{url('public/news_img/'.$ds_film[1]['img'])}}" alt="MyPassion"  width="450" height="200"/>
                                    </li>
                                </ul>
                            </div>
                            
                            <h6 class="regular"><a href="{{ route('showInfo',[$ds_film[1]['TenKhongDau'],$ds_film[1]['slug']]) }}">{{$ds_film[1]['title']}}</a></h6>
                            <span class="meta">{{$ds_film[1]['created_at']}}   \\   <a href="#">No Coments.</a></span>
                            <p>{{$ds_film[1]['content']}}</p>   </div>
                        
                        <div class="outerwide">
                        	<ul class="block2">
                                <?php $len=count($ds_film)?>
                                 @for ($i = 2; $i < $len; $i++)
                                <li class="m-r-no">
                                    <a href="{{route('showInfo',[$ds_film[$i]['TenKhongDau'],$ds_film[$i]['slug']])}}"><img src="{{url('public/news_img/'.$ds_film[$i]['img'])}}" alt="MyPassion" class="alignleft" width="75px" height="75px" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="{{route('showInfo',[$ds_film[$i]['TenKhongDau'],$ds_film[$i]['slug']])}}">{{$ds_film[$i]['title']}}</a>
                                    </p>
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li>
                                @endfor
                               

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
        
       