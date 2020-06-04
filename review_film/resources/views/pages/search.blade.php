@extends('layouts.master')
        <!-- /Header -->
@section('content')
        
        <!-- Content -->
        <section id="content">
            <div class="container">
            	<!-- Main Content -->
                <!-- Phần này phải đợi danh mục -->
                <div class="breadcrumbs column">                    
                	<p>
                        <a href="{{url('/')}}">Home. </a>
                       \\ Tìm kiếm với từ khoá: <span class="highlight"><strong>{{$tu_khoa}}</strong></span>
                    </p>

                </div>
                
                <div class="main-content">                	
                    <!-- Popular News -->
                	<div class="column-two-third">                    	
                        <div class="outerwide">
                        	<ul class="block2">  
                                @foreach($ds_news as $news)
                                <li>
                                    <a href="{{ route('showInfo',[$news['TenKhongDau'],$news['slug']]) }}">

                                        <img src="{{url('public/news_img/'.$news['img'][0])}}" alt="{{$news['img'][0]}}" class="alignleft" width="100px" height="80px" title="{{$news['title']}}" />
                                    </a>
                                    <p>
                                        <span>Thể loại: {{$news['Ten']}}</span>
                                        <a href="{{route('showInfo',[$news['TenKhongDau'],$news['slug']])}}">{{$news['title']}}</a>
                                    </p>
                                    <!-- Phân này nhỏ wa' hiển thị bị lệch style -->
                                    <!-- <p>Tóm tắt nội dung</p> -->
                                    <span class="rating"><span style="width:80%;"></span></span>
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
        
       