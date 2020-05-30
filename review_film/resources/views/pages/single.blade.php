@extends('layouts.master')
<!-- /Header -->
@section('content')
<!-- <section id="content"> -->
<section id="{{$theloai['TenKhongDau']}}">
            <div class="container">
                <div class="breadcrumbs column">
                    <!-- thể loại của phim phải fix nhìu chỗ? -->
                	<p><a href="{{route('home')}}">Home.</a>    \\   {{$theloai['Ten']}}.</p>
                </div>
                @if(session('error'))
                    {{session('error')}}
                @endif
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
                        <span class="meta">Ngày đăng: {{date("H \g\iờ i p\h\ú\\t s \g\iâ\y \\n\g\à\y d-m-Y", strtotime($news['created_at']))    }}   \\ Thể loại:  <a href="{{route('theLoai',$theloai_url)}}">{{$theloai['Ten']}}. </a></span>
                        <p>Tóm tắt nội dung: {{$news['short_content']}}</p>
                        <p>Nội dung: {{$news['content']}}</p>
                                                
                        <div class="comments">
                            <h5 class="line"><span>Comments  (<span id="count_cmt">{{$count_cmt}}</span>).</span></h5>
                            <ul>
                                @foreach($ds_cmt as $cmt)
                                <li>
                                    <div>
                                        <div class="comment-avatar"><img src="{{url('public/img/banner/1.png')}}" alt="MyPassion" /></div>
                                        <div class="commment-text-wrap">
                                            <div class="comment-data">
                                                <p>
                                                    <a href="#" class="url"><strong>{{$cmt['name']}} </strong></a> &nbsp;
                                                    @if(Auth::check())
                                                    @if(Auth::user()->id == $cmt['idUser'])
                                                    <a class="del-cmt" href="javascript:void(0)" >
                                                    <input type="hidden" value="{{$cmt['id']}}">
                                                    Xoá
                                                    </a>    
                                                    @endif
                                                    @endif
                                                     <br /> 
                                                    <span>{{date("H:i:s d-m-Y", strtotime($cmt['updated_at']))}} - <a href="javascript:void(0)" class="comment-reply-link">
                                                    <input type="hidden" value="{{$cmt['id']}}">
                                                    trả lời</a>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="comment-text">{{$cmt['NoiDung']}}</div>
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
                                                            <a href="#" class="url">{{$sub_cmt['name']}}</a>
                                                            @if(Auth::check())
                                                            @if(Auth::user()->id == $sub_cmt['idUser'])      
                                                            <a class="del-sub-cmt" href="javascript:void(0)" >
                                                            <input type="hidden" value="{{$sub_cmt['id']}}">
                                                            Xoá
                                                            </a>     
                                                            @endif
                                                            @endif
                                                             <br /> 
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
                        <!-- Xử lý security củ chuối :) -->
                        @if(Auth::check()) 
                        <div class="comment-form">
                            <h5 class="line"><span>Để lại bình luận tại đây.</span></h5>
                            <form method="post" id="comment-form">
                                {{csrf_field()}}                               
                                <input type="hidden" name="idBaiRv" value="{{$news['id']}}">
                                <div class="form">
                                    <label>Comment*</label>
                                    <textarea name="content" rows="10" cols="20"></textarea>
                                </div>
                                <input type="button" class="post-comment" value="Đăng bình luận" />
                                <span id="alert"></span>
                            </form>
                        </div>
                        @else
                        <div class="comment-form">
                            <h5 class="line">
                                <span>Để lại bình luận tại đây.</span>                               
                            </h5>
                            <form action="{{route('comment')}}" method="post">
                                {{csrf_field()}}                                
                                <input type="hidden" name="idBaiRv" value="{{$news['id']}}">
                                <div class="form">
                                    <label>Comment*</label>
                                    <textarea name="content" rows="10" cols="20"></textarea>
                                </div>
                                <input type="submit" class="post-comment" value="Đăng bình luận" />

                            </form>
                        </div>
                        @endif
                    <script>
                    $(document).ready(function(){
                        //  Ajax cmt cha
                        $("#comment-form input[type=button]").click(function(){
                            f = $("#comment-form").serializeArray();                        
                            // console.log(f[2]['value']);
                            if(f[2]['value'] == ''){
                                console.log("Invalid");  
                                $("#alert").html("<p class='copyright'><strong>Chưa nhập bình luận kìa!</strong></p>");
                            } 
                            else{ 
                                console.log("Valid");
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
                                    var html = '<li><div><div class="comment-avatar"><img src="{{url('public/img/banner/1.png')}}" alt="MyPassion" /></div><div class="commment-text-wrap"><div class="comment-data"><p><a href="#" class="url"><strong>' + data.Name + '</strong></a><a class="del-cmt" href="javascript:void(0)" ><input type="hidden" value="' + data.id + '">Xoá</a>  <br /> <span>' + data.updated_at + ' - <a href="javascript:void(0)" class="comment-reply-link"><input type="hidden" value="' + data.id + '">trả lời</a></span></p></div><div class="comment-text">' + data.NoiDung + '</div></div></div><ul class="children"></ul></li>';
                                    $(".comments").children("ul").append(html);
                                },
                                error:function(err){
                                    console.log(err);
                                }
                            });                                                    
                            // reset content cmt
                            $(this).parent()[0].reset();  
                            $("#alert").text('');    
                            // + tổng cmt
                            $("#count_cmt").text(parseInt($("#count_cmt").text()) + 1);

                            $(".del-cmt").click(function(){
                                var r = confirm("Bạn có muốn xoá comment này ko?");
                                if(r == true){
                                    console.log("Xoá nhé!");
                                    
                                    var id_cmt = parseInt($(this).children("input[type=hidden]").val());                                
                                    $.ajax({
                                        url: window.location.origin + "/delete-cmt/" + id_cmt,
                                        type: "get",                                
                                        success:function(data){
                                            console.log(data);
                                        }
                                    });

                                    $(this).parent().parent().parent().parent().remove();
                                }
                                else{
                                    console.log("Tôi chưa xoá cmt của bạn!");
                                }
                            });
                           } 
                        // End Ajax cha
                        });
                    // End jquery
                    });   

                    $(".comment-reply-link").click(function(){
                        // Check login 
                        @if(!Auth::check()) window.location.href = window.location.origin + '/login';
                            return;
                        @endif                               
                         var html = '<li><div class="comment-form" id="reply"><h5 class="line"><span>Để lại bình luận tại đây.</span><a class="close-comment" href="javascript:void(0)"><p class="copyright">X</p></a></h5><form id="sub-comment-form">{{csrf_field()}}<input type="hidden" name="idComment" value="' + $(this).children().val() + '"><div class="form"><label>Sub Comment*</label><textarea name="content" rows="10" cols="20" required></textarea></div><input type="button" class="post-comment" value="Đăng bình luận" /><span id="alert"></span></form></div></li>';
                       $(this).parent().parent().parent().parent().parent().siblings().children(".form-reply").html(html);


                       // Sp cho ajax cmt con => định vị trí chèn
                       $(this).parent().parent().parent().parent().parent().siblings().children(".form-reply").before('<span id="cmt' + $(this).children().val() + '"></span>');

                       // Ajax cmt con
                        $("#sub-comment-form input[type=button]").click(function(){
                            f = $("#sub-comment-form").serializeArray();
                            if(f[2]['value'] == ''){
                            console.log("Invalid");  
                            $("#alert").html("<p class='copyright'><strong>Chưa nhập bình luận kìa!</strong></p>");
                            } 
                            else{ 
                            console.log(f);
                            $.ajax({
                                url: "{{route('comment')}}",
                                type: "post",
                                dataType: "json",
                                data: f,
                                success: function(data){
                                    console.log(data);
                                    var html = '<li><div><div class="comment-avatar"><img src="{{url('public/img/banner/2.png')}}" alt="MyPassion" /></div><div class="commment-text-wrap">                                                <div class="comment-data"><p><a href="#" class="url">' + data.Name + '</a>   <a class="del-sub-cmt" href="javascript:void(0)" ><input type="hidden" value="' + data.id + '">Xoá</a> <br />                 <span>' + data.updated_at + '</span></p></div><div class="comment-text">' + data.NoiDung + '</div></div></div></li>';
                                    $("#cmt" + data.idComment).before(html);
                                    $(this).remove();
                                }
                            });
                            // cmt xog xoá form => tránh BUG :D
                            $("#sub-comment-form").parent().remove();
                            // cộng tổng cmt
                            $("#count_cmt").text(parseInt($("#count_cmt").text()) + 1);

                            $(".del-sub-cmt").click(function(){
                                var r = confirm("Bạn có muốn xoá sub comment này ko?");
                                if(r == true){
                                    console.log("Xoá nhé!");
                                    
                                    var id_sub_cmt = parseInt($(this).children("input[type=hidden]").val());                                
                                    console.log(id_sub_cmt);
                                    // $.ajax({
                                    //     url: window.location.origin + "/delete-sub-cmt/" + id_sub_cmt,
                                    //     type: "get",                                
                                    //     success:function(data){
                                    //         console.log(data);
                                    //     }
                                    // });

                                    // $(this).parent().parent().parent().parent().remove();
                                }
                                else{
                                    console.log("Tôi chưa xoá cmt của bạn!");
                                }
                            }); 

                            }


                        // End Ajax con
                        }); 

                        $(".close-comment").click(function(){    
                            $(this).parent().parent().remove();
                        });                                              
                    // End reply link
                    }); 

                    $(".del-cmt").click(function(){
                        var r = confirm("Bạn có muốn xoá comment này ko?");
                        if(r == true){
                            console.log("Xoá nhé!");
                            
                            var id_cmt = parseInt($(this).children("input[type=hidden]").val());                                
                            $.ajax({
                                url: window.location.origin + "/delete-cmt/" + id_cmt,
                                type: "get",                                
                                success:function(data){
                                    console.log(data);
                                }
                            });

                            $(this).parent().parent().parent().parent().remove();
                        }
                        else{
                            console.log("Tôi chưa xoá cmt của bạn!");
                        }
                    }); 

                    $(".del-sub-cmt").click(function(){
                        var r = confirm("Bạn có muốn xoá sub comment này ko?");
                        if(r == true){
                            console.log("Xoá nhé!");
                            
                            var id_sub_cmt = parseInt($(this).children("input[type=hidden]").val());                                
                            console.log(id_sub_cmt);
                            // $.ajax({
                            //     url: window.location.origin + "/delete-sub-cmt/" + id_sub_cmt,
                            //     type: "get",                                
                            //     success:function(data){
                            //         console.log(data);
                            //     }
                            // });

                            // $(this).parent().parent().parent().parent().remove();
                        }
                        else{
                            console.log("Tôi chưa xoá cmt của bạn!");
                        }
                    });                                                   
                    </script>                   
                    <!-- /Single -->                                          
                </div>               
            </div>

            @stop
        