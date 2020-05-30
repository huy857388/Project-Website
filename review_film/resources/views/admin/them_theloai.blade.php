@extends('adminLayout')
@section('adminContent')
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <b>Thêm Thể Loại</b>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
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
                                <form action="them" method="POST" >
                                    <input type="hidden" name="_token" 
                                    value="{{csrf_token()}}" />
                                <div class="form-group">
                                    <label>Tên Thể Loại:</label>
                                    <input class="form-control" name="Ten" placeholder="Nhập tên thể loại">
                                
                                <button type="submit" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection