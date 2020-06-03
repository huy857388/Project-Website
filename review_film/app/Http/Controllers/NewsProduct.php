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
    public function authLogin(){
        $adminId = Session::get('adminId');
        if($adminId){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function them_baiviet(){
        $this->authLogin();
    	$tbl_theLoai= DB::table('theloai')->get();
    	return view('admin.them_baiviet')->with('tbl_theLoai',$tbl_theLoai);
    }
    public function danhsach_baiviet(){
        $this->authLogin();
        $ds_baiviet = DB::table('news')->get();
        $manager_dsbaiviet = view('admin.danhsach_baiviet')->with('ds_baiviet',$ds_baiviet);
		return view('adminLayout')->with('admin.danhsach_baiviet',$manager_dsbaiviet);
    }
    public function save_baiviet(Request $request){
        $this->authLogin();
    	
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
    		$get_image->move('public/news_img',$new_image);
    		$data['img']=$new_image;
    		DB::table('news')->insert($data);
    		return Redirect::to('danhsach_baiviet');
    	}
    	$data['img']='';
    	DB::table('news')->insert($data);
    	return Redirect::to('danhsach_baiviet');

    }
    public function edit_baiviet($id_baiviet){
        $this->authLogin();
        $tbl_theLoai = DB::table('theloai')->orderby('id','desc')->get();
        $tbl_baiviet = DB::table('news')->where('id',$id_baiviet)->get();
        $manager_suabaiviet = view('admin.sua_baiviet')->with('tbl_baiviet',$tbl_baiviet)->with('tbl_theLoai',$tbl_theLoai);
        return view('adminLayout')->with('admin.sua_baiviet',$manager_suabaiviet);
    }
    public function update_baiviet(Request $request,$id_baiviet){
        $this->authLogin();
        $data=array();
        $data['title']= $request->titles_news;     
        $data['content']=$request->content_news;
        $data['short_content']=$request->short_content_news;
        $data['idTheLoai']=$request->id_theLoai;    
        $data['hot']=$request->hot_news!=''?1:0;
        $data['new']=$request->new_news!=''?1:0;
        $data['deCu']=$request->deCu_news!=''?1:0;      
        $get_image=$request->file('img_news');
        if($get_image){
            $new_image = rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/news_img',$new_image);
            $data['img']=$new_image;
            DB::table('news')->where('id',$id_baiviet)->update($data);
            return Redirect::to('danhsach_baiviet');
        }
        $data['img']='';
        DB::table('news')->where('id',$id_baiviet)->update($data);
        return Redirect::to('danhsach_baiviet');
    }
    public function xoa_baiviet($id_baiviet){
        $this->authLogin();
        DB::table('comment')->where('idBaiRv',$id_baiviet)->delete();
        DB::table('news')->where('id',$id_baiviet)->delete();
        return Redirect::to('danhsach_baiviet');
    }

}