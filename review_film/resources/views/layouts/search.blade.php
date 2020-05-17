<div class="search">
    <form action="#" method="post">
        <input type="text" value="Search." onblur="if(this.value=='') this.value='Search.';" onfocus="if(this.value=='Search.') this.value='';" class="ft"/>
        <input type="submit" value="" class="fs">
    </form>
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
    @endif
</div>

