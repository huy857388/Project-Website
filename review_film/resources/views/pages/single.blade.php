@extends('layouts.master')
        <!-- /Header -->
@section('content')
<section id="content">
            <div class="container">
            	
                <div class="breadcrumbs column">
                    <!-- Phần này World news là hiện gì thế? còn single nữa? -->
                	<p><a href="{{route('home')}}">Home.</a>    \\   Single.</p>
                </div>
            
            	<!-- Main Content -->
                <div class="main-content">
                    
                    <!-- Single -->
                    <div class="column-two-third single">
                    	<div class="flexslider">
                            <ul class="slides">
                                <!-- 1 news phải kím 3 4 tấm hình lận hả? :)) -->
                                <!-- H t làm tạm 1 hình xuất 3 lần lun đó -->
                                <li>
                                    <img src="{{url('public/news_img/'.$news['img'])}}" alt="MyPassion" />
                                </li>
                                <li>
                                    <img src="{{url('public/news_img/'.$news['img'])}}" alt="MyPassion" />
                                </li>
                                <li>
                                    <img src="{{url('public/news_img/'.$news['img'])}}" alt="MyPassion" />
                                </li>
                            </ul>
                        </div>
                        
                        <h6 class="title">{{$news['title']}}</h6>
                        <span class="meta">{{$news['created_at']}}   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                        <p>Tóm tắt nội dung: {{$news['short_content']}}</p>
                        <p>Nội dung: {{$news['content']}}</p>
                        
                        
                        <div class="comments">
                            <h5 class="line"><span>Comments.</span></h5>
                            <ul>
                                <li>
                                    <div>
                                        <div class="comment-avatar"><img src="{{url('public/img/avatar.png')}}" alt="MyPassion" /></div>
                                        <div class="commment-text-wrap">
                                            <div class="comment-data">
                                                <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                            </div>
                                            <div class="comment-text">Curabitur nunc mauris, <a href="#">link test</a> id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                        </div>
                                        
                                    </div>
                                    <ul class="children">
                                        <li>
                                            <div>
                                                <div class="comment-avatar"><img src="{{url('public/img/avatar.png')}}" alt="MyPassion" /></div>
                                                <div class="commment-text-wrap">
                                                    <div class="comment-data">
                                                        <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                    </div>
                                                    <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                </div>
                                            </div>
                                            
                                            <ul class="children">
                                                <li>
                                                    <div>
                                                        <div class="comment-avatar"><img src="{{url('public/img/avatar.png')}}" alt="MyPassion" /></div>
                                                        <div class="commment-text-wrap">
                                                            <div class="comment-data">
                                                                <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                            </div>
                                                            <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                        </div>
                                                    </div>
                                                    
                                                   
                                                    
                                                </li>
                                            </ul>
                                            
                                            <ul class="children">
                                                <li>
                                                    <div>
                                                        <div class="comment-avatar"><img src="{{url('public/img/avatar.png')}}" alt="MyPassion" /></div>
                                                        <div class="commment-text-wrap">
                                                            <div class="comment-data">
                                                                <p><a href="#" class="url">MyPassion </a><br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                            </div>
                                                            <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            
                                        </li>
                                    </ul>
                                    <ul class="children">
                                        <li>
                                            <div>
                                                <div class="comment-avatar"><img src="{{url('public/img/avatar.png')}}" alt="MyPassion" /></div>
                                                <div class="commment-text-wrap">
                                                    <div class="comment-data">
                                                        <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                    </div>
                                                    <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="comment-form">
                            <h5 class="line"><span>Leave a reply.</span></h5>
                            <form action="#" method="post">
                                <div class="form">
                                    <label>Name*</label>
                                    <div class="input">
                                        <input type="text" class="name" />
                                    </div>
                                </div>
                                <div class="form">
                                    <label>Email*</label>
                                    <div class="input">
                                        <input type="text" class="name" />
                                    </div>
                                </div>
                                <div class="form">
                                    <label>Website</label>
                                    <div class="input">
                                        <input type="text" class="name" />
                                    </div>
                                </div>
                                <div class="form">
                                    <label>Comment*</label>
                                    <textarea rows="10" cols="20"></textarea>
                                </div>
                                <input type="submit" class="post-comment" value="Post Comment" />
                            </form>
                        </div>
                        
                    </div>
                    <!-- /Single -->
                    
                </div>
                @stop
        