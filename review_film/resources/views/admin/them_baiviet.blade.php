@extends('adminLayout')
@section('adminContent')
@if(session('thong bao'))
    <div class="alert alert-success">
       {{session('thong bao')}}
    </div>
 @endif
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm bài viết
                        </header>
                        <div class="panel-body">
                                <?php
    $message = Session::get('message');
    if ($message) {
        echo '<span class="text-alert">',$message.'</span>';
        Session::put('message',NULL);
    }?>
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save_baiviet')}}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}} 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiểu Đề</label>
                                    <input type="text" name="titles_news" class="form-control" id="exampleInputEmail1" placeholder="tieude">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"> Nội Dung </label>
                                    <textarea  style="resize: none" rows="5" name="content_news" class="form-control" id="exampleInputPassword1" placeholder="noidung"> </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"> Tóm Tắt Nội Dung</label>
                                    <input type="text" name="short_content_news" class="form-control" id="exampleInputPassword1" placeholder="noidung_ngan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"> Thể Loại</label>
                            <select class="form-control input-sm m-bot15" name="id_theLoai">
                                <?php foreach ($tbl_theLoai as $key => $theloai): ?>
                                <option value="{{$theloai->id}}">{{$theloai->Ten}}</option>
                                <?php endforeach ?>

                            </select>
                        </div>
                                
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="hot_news" value="1"> HOT
                                    </label>
                                </div>
                                                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="new_news" value="1"> NEW
                                    </label>
                                </div>
                   <div class="form-group">
                                    <label for="exampleInputEmail1">Điểm Đánh Giá</label>
                                    <input type="text" name="diem_danh_gia_news" class="form-control" id="exampleInputEmail1" placeholder="tieude">
                                </div>                     
                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh</label>
                                    <input type="file" id="exampleInputFile" name="img_news">
                                    <p class="help-block"></p>
                                </div>
                                <button type="submit" class="btn btn-info" name="them_baiviet">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection