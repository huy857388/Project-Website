<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\theloai;
use App\News;
use DB;
use Session;

session_start();
class category extends Controller
{
    public function authLogin(){
        $adminId = Session::get('adminId');
        if($adminId){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
 
     public function danhsach_theloai(){
        //$this->authLogin();
     	$theloai = theloai::all();
     	return view('admin.danhsach_theloai',['theloai' => $theloai]); 
    	
    }

    public function them_theloai(){
       //$this->authLogin();

    	return view('admin.them_theloai');
    }
    public function postthem_theloai(Request $request)
    {
        //$this->authLogin();
    	
    	
    	$this->validate($request,
    		[
                'Ten'=>"required|unique:theloai,Ten|min:3|max:100"
            ],
            [
                'Ten.required'=>'Bạn chưa nhập tên thể loại',
                'Ten.unique'=>'Tên thể loại đã tồn tại',
                'Ten.min'=> 'Tên thể loại phải từ có từ 3 đến 100 ký tự',
                'Ten.max'=> 'Tên thể loại phải từ có từ 3 đến 100 ký tự',
            ]);
    	$theloai = new theloai;
    	$theloai->Ten= $request->Ten;
    	$theloai->TenKhongDau = utf8tourl(utf8convert($request->Ten));
    	$theloai->save();
    	return redirect('theloai/them') ->with('thong bao','Thêm thành công!');	
    }

    public function sua_theloai($id)
    {
       // $this->authLogin();
        $theloai = theloai::find($id);
        return view('admin.sua_theloai',['theloai'=>$theloai]);

    }

    public function postsua_theloai(Request $request, $id)
    {
        //$this->authLogin();
        $theloai = theloai::find($id);
        $this->validate($request,
            [
                'Ten'=>"required|unique:theloai,Ten|min:3|max:100"
            ],
            [
                'Ten.required'=>'Bạn chưa nhập tên thể loại',
                'Ten.unique'=>'Tên thể loại đã tồn tại',
                'Ten.min'=> 'Tên thể loại phải từ có từ 3 đến 100 ký tự',
                'Ten.max'=> 'Tên thể loại phải từ có từ 3 đến 100 ký tự',
            ]); 
        $theloai->Ten = $request->Ten;
        $theloai->TenKhongDau = utf8tourl(utf8convert($request->Ten));
        $theloai->save();
        return redirect('theloai/sua/'.$id)->with('thong bao','Sửa thành công!');
    }

    public function xoa_theloai($id)
    {
      // $this->authLogin();
      $count = News::where('idTheloai','=',$id)->count();
      if($count > 0)
        return redirect('theloai/danhsach')->with('thong bao','Không thể xóa, đã tồn tại bài viết');
      else{
        $theloai = theloai::find($id);
        $theloai->delete();
        return redirect('theloai/danhsach')->with('thong bao','Đã xóa thành công');
        }
    }
}
