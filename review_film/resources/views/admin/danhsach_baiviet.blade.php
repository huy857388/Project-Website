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
            <th>ID bài viết</th>
            <th>ID thể loại</th>
            <th>Tiểu Đề</th>
            <th>Nội Dung</th>
            <th>Tóm Tắt Nội Dung</th>
            <th>HOT</th>
            <th>NEW</th>
            <!-- <th>ĐỀ CỬ</th> -->
            <th>Ngày Tạo</th>
            <th>Ngày Cập Nhật</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($ds_baiviet as $key => $baiviet): ?>
            
          <tr>
            <td>{{$baiviet->id}}</td>
            <td>{{$baiviet->idTheLoai}}</td>
            <td>{{$baiviet->title}}</td>
            <td>{{$baiviet->content}}</td>
            <td>{{$baiviet->short_content}}</td>
                      <?php 
                      $kt_hot=$baiviet->hot==0?0:'checked'; 
                      $kt_new=$baiviet->new==0?0:'checked';
                      //$kt_decu=$baiviet->deCu==0?0:'checked';
                      ?>
            <td>
                <input type="checkbox" <?php echo $kt_hot?> >
            </td> 
                        <td>
                <input type="checkbox" <?php echo $kt_new?> >
            </td>
            <!-- <td>
                <input type="checkbox" <?php //echo $kt_decu?>>
            </td> -->
                        <td></td>
                        <td></td>
            <td>
              <a href="{{URL::to('/edit_baiviet/'.$baiviet->id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                <a href="{{URL::to('/xoa_baiviet/'.$baiviet->id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
                    <?php endforeach ?>
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