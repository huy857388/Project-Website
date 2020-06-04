<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    //
    public function danhsach_taikhoan(){
    	$ds_tk = User::all();    	
    	return view('admin.danhsach_taikhoan',compact('ds_tk'));        		
    }
}