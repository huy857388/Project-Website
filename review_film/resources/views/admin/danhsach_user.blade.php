 @extends('adminLayout')
@section('adminContent')
<!--main content start-->
@if(session('thong bao'))
    <div class="alert alert-success">
       {{session('thong bao')}}
    </div>
 @endif
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">

    <div class="panel-heading">
     <B>Danh Sách User</B>
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th data-breakpoints="xs">Tên User</th>
            <th data-breakpoints="xs">Email</th>
            <th data-breakpoints="xs">Xóa</th>
            <th data-breakpoints="xs">Sửa</th>
          </tr>
        </thead>
        <tbody>
         @foreach($users as $u)
         <tr data-expanded="true">
           <td>{{$u->id}}</td>
           <td>{{$u->name}}</td>
           <td>{{$u->email}}</td>
           <td><a href="xoa/{{$u->id}}">Xóa</a></td>
           <td><a href="sua/{{$u->id}}">Sửa</a></td>
         </tr>
         @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
          <div class="footer">
            <div class="wthree-copyright">
              <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
          </div>
  <!-- / footer -->
</section>

<!--main content end-->
@endsection