 <!-- /Main Content -->
<script type="text/javascript">
        var player;
        function F1()
        {
            var apiKey = "AIzaSyAvamzI--kIuSoUGgRmoexZcDCibzdqRqM";
            var idVideo = "PLBULsmyQGMTh2BUCv70mTaIe6BsLdMMGT";
            var url= "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=PLBULsmyQGMTh2BUCv70mTaIe6BsLdMMGT&key=AIzaSyAvamzI--kIuSoUGgRmoexZcDCibzdqRqM&maxResults=3";
            // alert('f1');
            $.ajax({
                async: false,
                type: 'GET',
                url: url,
                success:function(s)
                {
                    //alert('ok');
                    console.log(s);
                    var output = '';
                    output += '<div>';
                    $.each(s.items, function(i, result_item){
                        var title = result_item.snippet.title;
                        var href = result_item.id;
                        var img = result_item.snippet.thumbnails.default.url;
                      //  output += '<img src="'+img+'" />';
                       output += '<div><a class="title" href="https://www.youtube.com/watch?v='+href+'"  >'+'<img src="'+img+'" width="280" height="150" /><br>'+title+'</a></div>';
                    output +='</div>';
                    });
                    document.getElementById("demo").innerHTML = output;
                },
            });
        }   
        window.onload =F1;
                        
</script>
                <!-- Left Sidebar -->
                <div class="column-one-third">                
                     <div class="sidebar">
                        <h5 class="line"><span>News</span></h5>

                        <span id="demo"></span>
                        <span class="meta" align="right"> Nguồn:Phê Phim</span>
                     </div>
                 <div class="sidebar">
                        <div id="tabs">
                            <ul>
                                <li><a href="#tabs1">NEW</a></li>
                                <li><a href="#tabs2">HOT</a></li>
                                <li><a href="#tabs3">BÌNH LUẬN</a></li>
                            </ul>
                            <div id="tabs1">
                                <ul>
                                    <!--chạy for max 4 cái-->
                                    <!-- Phần này t làm chưa hoàn chỉnh --> 
                                    <?php 
                                    if(isset($ds_new)){
                                        if(count($ds_new)>2)
                                        {
                                            $len=2;
                                        }
                                        else $len=count($ds_new)?>
                                    @for ($i = 0; $i < $len; $i++)                                    
                                    <li>                                        
                                        <a href="{{ route('showInfo',[$ds_new[$i]['TenKhongDau'],$ds_new[$i]['slug']]) }}" class="title">{{$ds_new[$i]['title']}}</a>
                                        <span class="meta">{{$ds_new[$i]['short_content']}}  </span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                    @endfor
                                    <?php } ?>
                                </ul>
                            </div>
                            <div id="tabs2">
                                <ul>
                                      <!--chạy for max 4 cái-->
                                    <!-- Phần này t làm chưa hoàn chỉnh --> 
                                    <?php 
                                    if(isset($ds_hot)){
                                        if(count($ds_hot)>2)
                                        {
                                            $len=2;
                                        }
                                        else $len=count($ds_hot)?>
                                     @for ($i = 0; $i < $len; $i++)                                    
                                        <li>
                                            <a href="{{route('showInfo',[$ds_hot[$i]['TenKhongDau'],$ds_hot[$i]['slug']])}}" class="title">{{$ds_hot[$i]['title']}}</a>
                                            <span class="meta">{{$ds_hot[$i]['short_content']}}  </span>
                                            <span class="rating"><span style="width:70%;"></span></span>
                                        </li>
                                        @endfor
                                    <?php } ?>
                                </ul>
                            </div>
                            <div id="tabs3">
                                <ul>
                                    <!--chạy for max 4 cái-->
                                    <!-- Chỗ này chạy bình luận của tin nào vậy? -->
                                    <!-- T để tạm tất cả  các thông tin sơ bình luận đó -->
                                    <!-- chạy random vài bình luận ,t chỉnh rồi đó -->
                                    <li>
                                        <a href="#" class="title"><strong>tài khoản bình luận: </strong>123456</a>
                                    </li>
                                    <li>
                                        <a href="#" class="title"><strong>tài khoản bình luận: </strong> 78978978</a>
                                    </li>
                                    <li>
                                        <a href="#" class="title"><strong>tài khoản bình luận: </strong> 978978789</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                <!-- /Left Sidebar -->
                
            </div>    
        <!-- / Content -->
        
        <!-- Footer -->
       <footer id="footer">
            <div class="container">
                <div class="column-one-fourth">
                    <div class="logo">
                        <a href="index-2.html"><img src="{{url('public/img/lo.png')}}" alt="MyPassion" /></a>
                    </div>
                </div>
                <div class="column-one-fourth">
                    <h5 class="line"><span>LIÊN HỆ</span></h5>
                    <div class="twitterfeed">
                        <div id="tweets"></div>
                    </div>
                </div>
                <div class="column-one-fourth">
                   <h5 class="line"><span>THỂ LOẠI.</span></h5>
                    <ul class="footnav"><!-- chạy dòng for -->
                        <?php 
                            if(isset($ds_theloai))
                            {
                                ?>
                                @foreach($ds_theloai as $theloai)
                                <li><a href="{{route('theLoai',$theloai['TenKhongDau'])}}"><i class="icon-right-open"></i> {{$theloai['Ten']}}</a></li>
                                @endforeach
                                <?php
                            }
                         ?>
                        <!-- <li><a href="danhmuc"><i class="icon-right-open"></i> Kinh dị</a></li>
                        <li><a href="danhmuc"><i class="icon-right-open"></i> Viễn tưởng</a></li>                         -->
                    </ul>
                </div>
                <div class="column-one-fourth">
                    <h5 class="line"><span>GIỚI THIỆU</span></h5>
                    <p>Sản phẩm của nhóm 1 sử dụng laravel xây dựng website đánh giá, bàn luận film. Thành viên trong nhóm:  <br> Phạm Minh Huy - DH51603606 <br> Ngô Quốc Khánh - DH51603657 <br> Võ Hoàng Công Danh - DH51603941 <br> Hông Thuận Phát- DH51603902 <br> Nguyễn Hoàng Khang - DH51604086
  </p>
                </div>
                <p class="copyright">Nhóm 1</p>
            </div>
        </footer>
        <!-- / Footer -->
   
    </div>
	</div>
</div>
<!-- / Body Wrapper -->
</body>
</html>