<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Session;

session_start();
class usercontroller extends Controller
{
    public function authLogin(){
        $adminId = Session::get('adminId');
        if($adminId){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
 
     public function danhsach_user(){
        //$this->authLogin();
     	$users = User::all();
        return view('admin.danhsach_user',['users'=>$users]);
    	
    }

    public function them_user(){
       //$this->authLogin();

    	return view('admin.them_user');
    }
    public function postthem_user(Request $request)
    {
        //$this->authLogin();
    	
    	$this -> validate($request,[
            'name' => 'required|min:2',
            'email' => 'required|email|unique:user,mail',
            'password' => 'required|min:6|max:20',
            'passwordAgain' => 'required|same:password',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên',
            'name.min' => 'Tên người dùng có ít nhất 2 ký tự',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Sai định dạng email',
            'email.unique' => 'email đã tồn tại',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'mật khẩu có ít nhất là 6 ký tự và nhiều nhất 20 ký tự',
            'password.max' => 'mật khẩu có ít nhất là 6 ký tự và nhiều nhất 20 ký tự',
            'passwordAgain.required' => 'Bạn phải nhập lại mật khẩu',
            'passwordAgain.same' => 'mật khẩu nhập lại không khớp',
        ]);
        $users = new User;
        $users ->name = $request ->name;
        $users ->email = $request ->email;
        $users ->password = bcrypt($request ->password);
        $users->save();

        return redirect('user/them') ->with('thong bao','Thêm thành công');
    	
    }

    public function sua_user($id)
    {
       // $this->authLogin();
        

    }

    public function postsua_user(Request $request, $id)
    {
        //$this->authLogin();
        
    }

    public function xoa_user($id)
    {
      // $this->authLogin();
       $users = User::find($id);
       $users->delete();
       return redirect('user/danhsach') ->with('thong bao','Đã xóa người dùng');
    }
}
