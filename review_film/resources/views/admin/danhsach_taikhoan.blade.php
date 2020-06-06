@extends('adminLayout')
@section('adminContent')
        <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách bài viết
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Tìm kiếm!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>ID tài khoản</th>
            <th>Tên đăng nhập</th>
            <th>Email</th>
            <th>Nhà cung cấp</th>
            <th>ID liên kết</th>
            <th>Ngày tạo</th>            
            <th>Ngày cập nhật</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
			@foreach($ds_tk as $tk)
			<tr>
				<td>{{$tk->id}}</td>
				<td>{{$tk->name}}</td>
				<td>{{$tk->email}}</td>
				<td>{{ $tk->provider==''?'hệ thống':$tk->provider }}</td>
				<td>{{$tk->provider_id}}</td>				
				<td>{{date("H:i:s d-m-Y", strtotime($tk->created_at))}}</td>
				<td>{{date("H:i:s d-m-Y", strtotime($tk->updated_at))}}</td>	
			</tr>
			@endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection