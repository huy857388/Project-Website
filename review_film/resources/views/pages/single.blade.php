@extends('layouts.master')
        <!-- /Header -->
@section('content')
<section id="content">
            <div class="container">
                <div class="breadcrumbs column">
                    <!-- thể loại của phim phải fix nhìu chỗ?    -->
                	<p><a href="{{route('home')}}">Home.</a>    \\   {{$theloai}}.</p>
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
                        <span class="meta">{{$news['created_at']}}   \\  <a href="#">World new. </a>\\   <a href="#">{{$count_cmt}} Coments.</a></span>
                        <p>Tóm tắt nội dung: {{$news['short_content']}}</p>
                        <p>Nội dung: {{$news['content']}}</p>
                        
                        
                        <div class="comments">
                            <h5 class="line"><span>Comments.</span></h5>
                            <ul>
                                @foreach($ds_cmt as $cmt)
                                <li>
                                    <div>
                                        <div class="comment-avatar"><img src="{{url('public/img/banner/1.png')}}" alt="MyPassion" /></div>
                                        <div class="commment-text-wrap">
                                            <div class="comment-data">
                                                <p><a href="#" class="url">{{$cmt['name']}} <strong>tên cũng có link nữa hả?</strong></a> <br /> 
                                                    <span>{{date("H:i:s d-m-Y", strtotime($cmt['updated_at']))}} - <a href="javascript:void(0)" class="comment-reply-link">
                                                    <input type="hidden" value="{{$cmt['id']}}">
                                                    trả lời</a>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="comment-text">Curabitur nunc mauris phần comment-text này làm gì?,{{$cmt['NoiDung']}}</div>
                                        </div>
                                    </div>

                                    <ul class="children">
                                        @foreach($cmt['sub_cmt'] as $sub_cmt)
                                        <li>
                                            <div>
                                                <div class="comment-avatar"><img src="{{url('public/img//banner/2.png')}}" alt="MyPassion" /></div>
                                                <div class="commment-text-wrap">
                                                    <div class="comment-data">
                                                        <p>
                                                            <a href="#" class="url">{{$sub_cmt['name']}}</a> <br /> 
                                                            <span>{{date("H:i:s d-m-Y", strtotime($sub_cmt['updated_at']))}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="comment-text">{{$sub_cmt['NoiDung']}}</div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                        <span class="form-reply"></span>
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        @if(Auth::check()) 
                        <div class="comment-form">
                            <h5 class="line"><span>Leave a reply.</span></h5>
                            <form method="post" id="comment-form">
                                {{csrf_field()}}                               
                                <input type="hidden" name="idBaiRv" value="{{$news['id']}}">
                                <div class="form">
                                    <label>Comment*</label>
                                    <textarea name="content" rows="10" cols="20"></textarea>
                                </div>
                                <input type="button" class="post-comment" value="Post Comment" />
                            </form>
                        </div>
                        @else
                        <div class="comment-form">
                            <h5 class="line"><span>Leave a reply.</span></h5>
                            <form action="{{route('comment')}}" method="post">
                                {{csrf_field()}}                                
                                <input type="hidden" name="idBaiRv" value="{{$news['id']}}">
                                <div class="form">
                                    <label>Comment*</label>
                                    <textarea name="content" rows="10" cols="20"></textarea>
                                </div>
                                <input type="submit" class="post-comment" value="Post Comment" />
                            </form>
                        </div>
                        @endif
                    <script>
                        $(document).ready(function(){

                            $(".comment-reply-link").click(function(){
                                // console.log($(this).parent().parent().parent().parent().parent().siblings().children(".form-reply").html());
                                @if(Auth::check()) console.log($(this).children().val());
                                @else console.log("401 Authorization");
                                @endif
                                var html = '<li><div class="comment-form" id="reply"><h5 class="line"><span>Leave a reply.</span></h5><form action="{{route('comment')}}" method="post">{{csrf_field()}}<input type="hidden" name="idBaiRv" value="{{$news['id']}}"><input type="hidden" name="idComment" value="' + $(this).children().val() + '"><div class="form"><label>Sub Comment*</label><textarea name="content" rows="10" cols="20"></textarea></div><input type="submit" class="post-comment" value="Post Comment" /></form></div></li>';
                               $(this).parent().parent().parent().parent().parent().siblings().children(".form-reply").html(html);
                            });

                            $("#comment-form input[type=button]").click(function(){
                                // alert("Yes");
                                f = $("#comment-form").serializeArray();
                                
                                // console.log(f);
                                $.ajax({
                                    async: false,
                                    url: "{{route('comment')}}",
                                    type: "post", 
                                    dataType: "json",
                                    data: f,                                
                                    success: function(data){                                                                           
                                        console.log(data);
                                        // Xử lý format chưa dc
                                        // let format = $.format.date(new Date(data.updated_at), 'HH:mm:ss dd/MM/yyyy');
                                        // console.log(format);
                                        var html = '<li><div><div class="comment-avatar"><img src="{{url('public/img/banner/1.png')}}" alt="MyPassion" /></div><div class="commment-text-wrap"><div class="comment-data"><p><a href="#" class="url">' + data.Name + ' <strong>tên cũng có link nữa hả?</strong></a> <br /> <span>' + data.updated_at + ' - <a href="javascript:void(0)" class="comment-reply-link"><input type="hidden" value="' + data.id + '">trả lời</a></span></p></div><div class="comment-text">Curabitur nunc mauris phần comment-text này làm gì?,' + data.NoiDung + '</div></div></div><ul class="children"></ul></li>';
                                        // console.log(html);
                                        $(".comments").children("ul").append(html);
                                    },
                                    error:function(err){
                                        console.log(err);
                                    }
                                });
                                console.log(data);
                               
                            });
                        });
                    </script>
                    <!-- /Single -->                               
                    <!-- <li>
                        <div>
                            <div class="comment-avatar"><img src="{{url('public/img/banner/1.png')}}" alt="MyPassion" /></div>
                            <div class="commment-text-wrap">
                                <div class="comment-data">
                                    <p><a href="#" class="url">' + data.Name + ' <strong>tên cũng có link nữa hả?</strong></a> <br /> 
                                        <span>{{date("H:i:s d-m-Y", strtotime(' + data.updated_at + '))}} - <a href="javascript:void(0)" class="comment-reply-link">
                                        <input type="hidden" value="' + data.id + '">
                                        trả lời</a>
                                        </span>
                                    </p>
                                </div>
                                <div class="comment-text">Curabitur nunc mauris phần comment-text này làm gì?,' + data.NoiDung + '</div>
                            </div>
                        </div>

                        <ul class="children">
                        </ul>
                    </li> -->
                </div>
            </div>
            @stop
        