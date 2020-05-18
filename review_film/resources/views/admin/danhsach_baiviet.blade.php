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
            <th>ĐỀ CỬ</th>
            <th>Ngày Tạo</th>
            <th>Ngày Cập Nhật</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>Conan</td>
            <td>kể về những cuộc phá án đầy ngoạn ngục của thám tử nhí tài ba</td>
            <td>truyện kể về thám tử tí hon Conan</td>
            <td>
                <input type="checkbox" name="hot">
            </td>
                        <td>
                <input type="checkbox" name="hot">
            </td>
                        <td>
                <input type="checkbox" name="hot">
            </td>
                        <td>5/17</td>
                                    <td>17/5</td>
            <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
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