<div class="search">
    <form action="{{ route('search')}}" method="get">
        <input type="text" name="key" value="Search." onblur="if(this.value=='') this.value='Search.';" onfocus="if(this.value=='Search.') this.value='';" class="ft"/>
        <input type="submit" value="" class="fs">
    </form>
</div>

