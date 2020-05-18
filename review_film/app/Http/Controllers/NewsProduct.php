<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;
use Session;
session_start();

class NewsProduct extends Controller
{
    public function them_baiviet(){
    	$tbl_theLoai= DB::table('theloai')->get();
    	return view('admin.them_baiviet')->with('tbl_theLoai',$tbl_theLoai);
    }
    public function danhsach_baiviet(){
		return view('admin.danhsach_baiviet');
    }
    public function save_baiviet(Request $request){
    	
    	$data=array();
    	$data['title']= $request->titles_news;     //'ten cot trong sql' -> ten name
    	$data['content']=$request->content_news;
    	$data['short_content']=$request->short_content_news;
    	$data['idTheLoai']=$request->id_theLoai; 	
    	$data['hot']=$request->hot_news!=''?1:0;
    	$data['new']=$request->new_news!=''?1:0;
    	$data['deCu']=$request->deCu_news!=''?1:0;
    	$get_image=$request->file('img_news');
    	if($get_image){
    		$new_image = rand(0,99).'.'.$get_image->getClientOriginalExtension();
    		$get_image->move('public/backEnd/images',$new_image);
    		$data['img']=$new_image;
    		DB::table('news')->insert($data);
    		session::put ('message','them bai danh gia thanh cong');
    		return Redirect::to('danhsach_baiviet');
    	}
    	$data['img']='';
    	DB::table('news')->insert($data);
    	session::put ('message','them bai danh gia thanh cong');
    	return Redirect::to('danhsach_baiviet');

    }

}
