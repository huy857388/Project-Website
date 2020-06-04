<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
session_start();

class Comment extends Controller
{
    public function danhsach_comment(){
       // $this->authLogin();
        $ds_comment = DB::table('comment')->get();
        $manager_dscomment = view('admin.danhsach_comment')->with('ds_comment',$ds_comment);
        return view('adminLayout')->with('admin.danhsach_comment',$manager_dscomment);
    }
    public function xoa_comment($id_comment){
        //$this->authLogin();
        DB::table('subcomment')->where('idComment',$id_comment)->delete();
        DB::table('comment')->where('id',$id_comment)->delete();
        return redirect('danhsach_comment')->with('thong bao','Comment đã được xóa');
    }
}
