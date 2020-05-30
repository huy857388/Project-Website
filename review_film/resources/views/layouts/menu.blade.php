 <!-- Nav -->
<nav id="nav">
    <ul class="sf-menu">
        <li id="stt-home"><a href="{{ url('/')}}">TRANG CHỦ</a></li>
        <li id="stt-hot"><a href="{{route('danhmuc','HOT')}}">HOT</a></li>
        <li id="stt-new"><a href="{{route('danhmuc','NEW')}}">NEW</a></li>
        <li id="stt-theloai">

        	<a href="#">THỂ LOẠI</a>
            <ul>
                <!-- <li><i class="icon-right-open"></i><a href="danhmuc">KINH DỊ</a></li> -->
                <!-- Viết dòng for để liệt kê thể loại -->
                @foreach($ds_theloai as $theloai)
                <li id="stt-{{$theloai['TenKhongDau']}}"><i class="icon-right-open"></i><a href="{{route('theLoai',$theloai['TenKhongDau'])}}">{{$theloai['Ten']}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="#">TOP RATED MOVIES</a></li>
        <li id="stt-topcomment"><a href="{{ route('topComment')}}">TOP 10 COMMENT MOVIES</a></li>
        <!-- <li><a href="reviews.html">ĐỀ CỬ</a></li> -->
    <!--    <li>
            <a href="reviews.html">LỊCH.</a>
            <ul>
                <li><i class="icon-right-open"></i><a href="#">LỊCH CHIẾU PHIM.</a>
                    <ul>
                        <li><i class="icon-right-open"></i><a href="#">CGV CINIME.</a></li>
                        <li><i class="icon-right-open"></i><a href="#">BHD CINIME.</a></li>
                        <li><i class="icon-right-open"></i><a href="#">LOTTE CINIME.</a></li>
                    </ul>
                </li> 
                <li><i class="icon-right-open"></i><a href="#">LỊCH TRÌNH.</a></li>
            </ul>
        </li>
 -->
        @if(Auth::check())
        Chào bạn, {{ Auth::user()->name }}
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Đăng xuất
        </a>
       
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        @else
            <li><a href="{{route('login')}}">ĐĂNG NHẬP</a></li>  
            <li><a href="{{route('register')}}">ĐĂNG KÍ</a></li>  
        @endif                              
    </ul>
    
</nav>
<!-- /Nav -->