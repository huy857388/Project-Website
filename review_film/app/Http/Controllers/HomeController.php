<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Comment;
use App\TheLoai;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $ds_decu = News::where('deCu',1)->take(3)->get()->toArray();
        // 4 cái này hàm này cũng phải gọi nha vì nó để ở trang menu và footer mà 2 trang đó là template
        // Nếu ko thì hãy vào layouts/menu và footer đóng lại hàm for là dc vì 2 file này dùng nó
        $ds_theloai = TheLoai::all()->toArray();
        $ds_new = News::where('new',1)->take(4)->get()->toArray();
        $ds_hot = News::where('hot',1)->get()->toArray();
        $ds_cmt = Comment::all()->toArray();
        
        return view('pages.home',compact('ds_decu','ds_hot','ds_new','ds_cmt','ds_theloai'));
    }

    public function single($news_id){

        $news = News::find($news_id)->toArray();

        // var_dump($news);
        $ds_new = News::where('new',1)->take(4)->get()->toArray();
       
        $ds_hot = News::where('hot',1)->get()->toArray();
        $ds_cmt = Comment::all()->toArray();
        $ds_theloai = TheLoai::all()->toArray();
        return view('pages.single',compact('news','ds_hot','ds_new','ds_cmt','ds_theloai'));   
    }

    public function topRating(){
        $ds_new = News::where('new',1)->take(4)->get()->toArray();
       
        $ds_hot = News::where('hot',1)->get()->toArray();
        $ds_cmt = Comment::all()->toArray();
        $ds_theloai = TheLoai::all()->toArray();
        return view('pages.toprating',compact('ds_new','ds_hot','ds_cmt','ds_theloai'));
    }
}
