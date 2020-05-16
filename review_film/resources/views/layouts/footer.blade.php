 <!-- /Main Content -->
                
                <!-- Left Sidebar -->
                <div class="column-one-third">                
                    
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
                                    @foreach($ds_new as $news)
                                    <li>
                                        <a href="#" class="title">{{$news['short_content']}}</a>
                                        <span class="meta">{{$news['created_at']}}   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                    @endforeach
                                   <!--  <li>
                                        <a href="#" class="title">Blandit Rutrum, Erat et Sagittis Adipcising Elit.</a>
                                        <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                    <li>
                                        <a href="#" class="title">Blandit Rutrum, Erat et Sagittis Adipcising Elit.</a>
                                        <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li> -->
                                </ul>
                            </div>
                            <div id="tabs2">
                                <ul>
                                    <!-- chạy for max 4 cái  -->
                                    <!-- Phần này t làm chưa hoàn chỉnh -->
                                    @foreach($ds_hot as $news)
                                    <li>
                                        <a href="#" class="title">{{$news['short_content']}}</a>
                                        <span class="meta">{{$news['created_at']}}   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                    @endforeach
                                   <!--  <li>
                                        <a href="#" class="title">Mauris eleifend est et turpis. Duis id erat.</a>
                                        <span class="meta">27 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                    <li>
                                        <a href="#" class="title">Mauris eleifend est et turpis. Duis id erat.</a>
                                        <span class="meta">27 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li> -->
                                </ul>
                            </div>
                            <div id="tabs3">
                                <ul>
                                    <!--chạy for max 4 cái-->
                                    <!-- Chỗ này chạy bình luận của tin nào vậy? -->
                                    <!-- T để tạm tất cả  các thông tin sơ bình luận đó -->
                                    @foreach($ds_cmt as $cmt)
                                    <li>
                                        <a href="#" class="title"><strong>tài khoản {{$cmt['idUser']}} bình luận: </strong> {{$cmt['NoiDung']}}</a>
                                    </li>
                                    @endforeach
                                   <!--  <li>
                                        <a href="#" class="title"><strong>Someone:</strong> eleifend est et turpis. Duis id erat.Mauris eleifend est et turpis. Duis id erat.</a>
                                    </li>
                                    <li>
                                        <a href="#" class="title"><strong>Someone:</strong> eleifend est et turpis. Duis id erat.Mauris eleifend est et turpis. Duis id erat.</a>
                                    </li>
                                    <li>
                                        <a href="#" class="title"><strong>Someone:</strong> eleifend est et turpis. Duis id erat.Mauris eleifend est et turpis. Duis id erat.</a>
                                    </li> -->
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
                        <li><a href="#"><i class="icon-right-open"></i> KINH DỊ</a></li>
                    </ul>
                </div>
                <div class="column-one-fourth">
                    <h5 class="line"><span>GIỚI THIỆU</span></h5>
                    <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhon cus sem purus eu sapien. Lorem ipsum dolor sit amet adipcising elit. Elit norem simuls tortor lorem adipcising purus mosteu dsapien egestas.</p>
                </div>
                <p class="copyright">Nhóm 1</p>
            </div>
        </footer>
        <!-- / Footer -->
   
    </div>
	</div>
</div>
<!-- / Body Wrapper -->


<!-- SCRIPTS -->
<script type="text/javascript" src="{{url('public/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/easing.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/1.8.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/ui.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/carouFredSel.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/superfish.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/customM.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/jtwt.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/jflickrfeed.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/mobilemenu.js')}}"></script>
<!--[if lt IE 9]> <script type="text/javascript" src="js/html5.js"></script> <![endif]-->
<script type="text/javascript" src="{{url('public/js/mypassion.js')}}"></script>
<script type="text/javascript" src="{{url('public/bootstrap/js/boostrap.js')}}"></script>

</body>
</html>