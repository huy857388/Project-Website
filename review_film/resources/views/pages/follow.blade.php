@extends('layouts.master')
        <!-- /Header -->
@section('content')
        
        <!-- Content -->
        <section id="user">
            <div class="container">
            	<!-- Main Content -->
                <!-- Phần này phải đợi danh mục -->
                <div class="breadcrumbs column">                    
                	<p>
                        <a href="{{url('/')}}">Home. </a>
                       \\ những bộ phim đang theo dõi
                    </p>

                </div>
                
                <div class="main-content">                	
                    <!-- Popular News -->
                	<div class="column-two-third">                    	
                        <div class="outerwide">
                        	<ul class="block2">  
                        		@if(empty($ds_news))
                        			<h5>Bạn chưa có theo dõi news nào cả! Hãy chọn news theo dõi đi nào!</h5>
                        		@else
                                @foreach($ds_news as $news)
                                <li>
                                    <a href="{{ route('showInfo',[$news['TenKhongDau'],$news['slug']]) }}">

                                        <img src="{{url('public/news_img/'.$news['img'][0])}}" alt="{{$news['img'][0]}}" class="alignleft" width="100px" height="80px" title="{{$news['title']}}" />
                                    </a>
                                    <p>
                                        <span>Thể loại: {{$news['Ten']}}</span>
                                        <a href="{{route('showInfo',[$news['TenKhongDau'],$news['slug']])}}">{{$news['title']}}</a>
                                    </p>
                                    <p>Đang theo dõi</p>                                    
                                </li>
                                @endforeach                                                           @endif   
                            </ul>
                        </div>
                    </div>
                    <!-- /Popular News -->                    
                </div>
                <!-- /Main Content -->            
                <!-- Left Sidebar -->
                @stop
        <!-- / Content -->
        
       