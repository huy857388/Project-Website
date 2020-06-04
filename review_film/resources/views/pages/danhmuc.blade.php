@extends('layouts.master')
        <!-- /Header -->
@section('content')
        
        
        
        <!-- Content -->
        <!-- <section id="content"> -->
        <section id="{{$danhmuc}}">
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
                                    @foreach($ds_film[0]['img'] as $image)
                                    <li>
                                        <img src="{{url('public/news_img/'.$image)}}" alt="MyPassion"  width="450" height="200"/>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                              <h6 class="regular"><a href="{{ route('showInfo',[$ds_film[0]['TenKhongDau'],$ds_film[0]['slug']]) }}">{{$ds_film[0]['title']}}</a></h6>
                            <span class="meta">{{$ds_film[0]['created_at']}}   \\   <a href="#">No Coments.</a></span>
                            <p>{{$ds_film[0]['short_content']}}</p>  </div>
                        @if ($ds_film[1] != null)
                        <div class="outertight m-r-no m-t-no">
                            <div class="flexslider">
                                <ul class="slides">                                   
                                    @foreach($ds_film[1]['img'] as $image)
                                    <li>
                                        <img src="{{url('public/news_img/'.$image)}}" alt="MyPassion"  width="450" height="200"/>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <h6 class="regular"><a href="{{ route('showInfo',[$ds_film[1]['TenKhongDau'],$ds_film[1]['slug']]) }}">{{$ds_film[1]['title']}}</a></h6>
                            <span class="meta">{{$ds_film[1]['created_at']}}   \\   <a href="#">No Coments.</a></span>
                            <p>{{$ds_film[1]['short_content']}}</p>   </div>
                            @endif
                        
                        <div class="outerwide">
                        	<ul class="block2">
                                <?php $len=count($ds_film)?>
                                 @for ($i = 2; $i < $len; $i++)
                                <li class="m-r-no">
                                    <a href="{{route('showInfo',[$ds_film[$i]['TenKhongDau'],$ds_film[$i]['slug']])}}">                                        
                                        <img src="{{url('public/news_img/'.$ds_film[$i]['img'][0])}}" alt="MyPassion" class="alignleft" width="100px" height="100px" />                                        
                                    </a>
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
                             {{ $ds_film->links() }}
                        </div>
                    	
                    </div>
                    <!-- /Popular News -->
                    
                </div>
                <!-- /Main Content -->
                
                <!-- Left Sidebar -->
                @stop
        <!-- / Content -->
        
       