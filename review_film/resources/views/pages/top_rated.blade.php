@extends('layouts.master')
        <!-- /Header -->
@section('content')
        
        
        
        <!-- Content -->
        <section id="content">
            <div class="container">
            	<!-- Main Content -->
                
                <div class="breadcrumbs column">
                    <p><a href="{{url('/')}}">Home</a>   \\ Top rated</p>
                </div>
                
                <div class="main-content">
                	
                    <!-- Popular News -->
                	<div class="column-two-third">
                        @foreach($ds_film as $news)
                        @if($top1==0)
                    	<div class="outertight m-t-no">
                            <div class="badg">
                                <p><a href="#">No.1</a></p>
                            </div>
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="{{url('public/news_img/'.$news['img'])}}" alt="MyPassion"  width="450" height="200"/>
                                    </li>
                                </ul>
                            </div>
                            
                              <h6 class="regular"><a href="{{ route('showInfo',[$news['TenKhongDau'],$news['slug']]) }}">{{$news['title']}}</a></h6>
                             <span class="meta"> POINT: {{$news['diem_danh_gia']}}  \\   <a href="#">{{$news['created_at']}}</a></span>
                            <p>{{$news['content']}}</p>  </div>
                            <?php $top1=9 ?>
                        
                        @elseif($top2==0)
                        <div class="outertight m-r-no m-t-no">
                            <div class="badg">
                                <p><a href="#">No.2</a></p>
                            </div>
                            <div class="flexslider">
                                <ul class="slides">
                                   
                                    <li>
                                        <img src="{{url('public/news_img/'.$news['img'])}}" alt="MyPassion"  width="450" height="200"/>
                                    </li>
                                </ul>
                            </div>
                            
                            <h6 class="regular"><a href="{{ route('showInfo',[$news['TenKhongDau'],$news['slug']]) }}">{{$news['title']}}</a></h6>
                            <span class="meta"> POINT: {{$news['diem_danh_gia']}}  \\   <a href="#">{{$news['created_at']}}</a></span>
                            <p>{{$news['content']}}</p>   </div>
                           <?php $top2=9 ?>
                            <div class="outerwide">
                            <ul class="block2">
                        @else
                        
                                <li class="m-r-no">
                                    <a href="{{route('showInfo',[$news['TenKhongDau'],$news['slug']])}}"><img src="{{url('public/news_img/'.$news['img'])}}" alt="MyPassion" class="alignleft" width="75px" height="75px" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="{{route('showInfo',[$news['TenKhongDau'],$news['slug']])}}">{{$news['title']}}</a>
                                    </p>
                                    <span >POINT: {{$news['diem_danh_gia']}}</span>
                                </li> @endif
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
        
       