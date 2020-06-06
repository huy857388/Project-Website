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
                            Thêm User
                        </header>
                        <div class="panel-body">
                                @if(count($errors)>0)
                                  <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                     {{$err}} <br>
                                    @endforeach
                                  </div>
                              @endif

                              @if(session('thong bao'))
                              <div class="alert alert-success">
                                {{session('thong bao')}}
                                
                              </div>
                              @endif
                            <div class="position-center">
                                <form action="them" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" 
                                    value="{{csrf_token()}}" />
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Họ Tên:</label>
                                    <input name="name" class="form-control" placeholder="Nhập họ tên">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Nhập email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password:</label>
                                    <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Nhập lại Password:</label>
                                    <input type="password" name="passwordAgain" class="form-control" placeholder="Nhập lại mật khẩu">
                                </div>
                              
                                <button type="submit" class="btn btn-info" name="them_user">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection