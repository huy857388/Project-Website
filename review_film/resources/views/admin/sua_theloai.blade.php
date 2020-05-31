@extends('adminLayout')
@section('adminContent')
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thể Loại: <b>{{$theloai->Ten}}</b>

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

                                <form action="{{$theloai->id}}" method="POST">
                                    <input type="hidden" name="_token"
                                     value="{{csrf_token()}}" />
                                    
                                <div class="form-group">
                                    <label>Tên Thể Loại</label>
                                    <input name="Ten" class="form-control" placeholder="Điền tên thể loại" value="{{$theloai->Ten}}">
                                </div>
                                <button type="submit" class="btn btn-info">Sửa</button>
                            </form>
                            </div>
 
                        </div>
                    </section>

            </div>
@endsection