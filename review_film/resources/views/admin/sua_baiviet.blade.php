@extends('adminLayout')
@section('adminContent')
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa bài viết
                        </header>
                        <div class="panel-body">

        

                            <div class="position-center">
                                    <?php foreach ($tbl_baiviet as $key => $baiviet): ?>
                                <form role="form" action="{{URL::to('/update_baiviet/'.$baiviet->id)}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }} 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiểu Đề</label>
                                    <input type="text" value="{{$baiviet->title}}" name="titles_news" class="form-control" id="exampleInputEmail1" placeholder="tieude">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"> Nội Dung </label>
                                    <textarea  style="resize: none" rows="5" name="content_news" class="form-control" id="exampleInputPassword1" placeholder="noidung">{{$baiviet->content}} </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"> Tóm Tắt Nội Dung</label>
                                    <input value="{{$baiviet->short_content}}" type="text" name="short_content_news" class="form-control" id="exampleInputPassword1" placeholder="noidung_ngan">
                                </div>
                               <div class="form-group">
                                    <label for="exampleInputPassword1"> Thể Loại</label>
                           <select class="form-control input-sm m-bot15" name="id_theLoai">
<?php foreach ($tbl_theLoai as $key => $theloai): ?>
                     <?php if($theloai->id==$baiviet->idTheLoai){ ?>
                <option selected value="{{$theloai->id}}">{{$theloai->Ten}}</option>
                <?php } else {?>
                <option value="{{$theloai->id}}">{{$theloai->Ten}}</option>
<?php } endforeach ?>
                            </select>
                        </div>
                    <?php 
                      $kt_hot=$baiviet->hot==0?0:'checked'; 
                      $kt_new=$baiviet->new==0?0:'checked';
                      ?>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="hot_news" value="1" <?php echo $kt_hot?>> HOT
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="new_news" value="1" <?php echo $kt_new?>> NEW
                                    </label>
                                </div>
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Điểm Đánh Giá</label>
                                    <input type="text" value="{{$baiviet->diem_danh_gia}}" name="diem_danh_gia_news" class="form-control" id="exampleInputEmail1" placeholder="tieude">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh</label>
                                    <input type="file" id="exampleInputFile" name="img_news" class="form-control">
                                    <img scr="{{URL::to('public/news_img/'.$baiviet->img)}}" height="100" width="100">
                                </div>
                                <button type="submit" class="btn btn-info" name="update_baiviet">Sửa</button>
                            </form>
                            </div>
 <?php endforeach ?>
                        </div>
                    </section>

            </div>
@endsection