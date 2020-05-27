<div class="pager">
    <ul>
        @if ($ds_news['current_page'] != 1)
        <li>
            <a href="{{$ds_news['prev_page_url']}}" class="first-page"></a>
        </li>
        @endif
        @for ($i = 1; $i <=  $ds_news['last_page']; $i++)
        <li>
            @if($ds_news['current_page'] != $i)
            <a href="{{ $ds_news['path'].'?page='.$i }}">{!! $i !!}</a>
            @else 
            <a class="{!! ($ds_news['current_page'] == $i)? 'active':'' !!}" href="#">{!! $i !!}</a>
            @endif
        </li>
        @endfor
        @if ($ds_news['current_page'] != $ds_news['last_page'])
        <li>
            <a href="{{$ds_news['next_page_url']}}" class="last-page"></a>
        </li>
        @endif
    </ul>
</div>