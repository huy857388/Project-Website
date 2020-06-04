<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;
use Session;
// session_start();

class AdminController extends Controller
{
    public function authLogin(){
        $adminId = Session::get('adminId');
        if($adminId){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function index(){
        return view('adminLogin');
    }

    public function showDashboard(){
        $this->authLogin();
        return view('admin.dashboard');
    }

    public function dashboard(Request $request){
        $adminEmail=$request->adminEmail;
        $adminPassword=md5($request->adminPassword);
        $result=DB::table('admin')->where('adminEmail',$adminEmail)->where('adminPassword',$adminPassword)->first();

        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";

        // return view('admin.dashboard');

        if ($result){
            Session::put('adminName',$request->adminName);
            Session::put('adminId',$result->adminId);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message','Mật Khẩu Hoặc Tài Khoản Sai. Vui Lòng Nhập Lại');
            return Redirect::to('/admin');
        }
    }

     public function logOut(){
        $this->authLogin();
        session::put('adminName',null);
        session::put('adminId',null);
        return Redirect::to('/admin');
    }
}