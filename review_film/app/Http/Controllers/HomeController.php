<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Str;
use App\News;
use App\TheLoai;
use App\User;
use App\Comment;
use App\SubComment;
use Carbon\Carbon;

use DB;
use Auth;

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
        $ds_new = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.new','=',1)
                ->take(4)->get()->toArray();

        $ds_hot = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.hot','=',1)
               ->get()->toArray();   

        $ds_film = TheLoai::join('news','news.idTheLoai','=','theloai.id')                
                ->get()->toArray();                    
        // var_dump($ds_film);     

        // old patch
        // $ds_new = News::where('new',1)->take(4)->get()->toArray();
        // $ds_hot = News::where('hot',1)->get()->toArray();
        // $ds_film = News::all()->toArray();
        $ds_cmt = Comment::all()->toArray();
        $ds_theloai = TheLoai::all()->toArray();
        // var_dump($ds_hot);
        return view('pages.home',compact('ds_hot','ds_new','ds_cmt','ds_theloai','ds_film'));
    }
// CHÚ Ý: nếu trang bị lỗi là do phần footer hiện HOT , NEW nhưng chưa truyền ds_hot, ds_new
    

     public function danhmuc($url){
        $ds_new = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.new','=',1)
                ->take(4)->get()->toArray();

        $ds_hot = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.hot','=',1)
                ->get()->toArray();  

        if($url=='HOT')
        {        
            $ds_film = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.hot','=',1)
                ->get()->toArray();
        }
        if($url=='NEW')
        {       
            $ds_film = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.hot','=',1)
                ->get()->toArray();
        }
        $danhmuc = $url;
        $ds_theloai = TheLoai::all()->toArray();
        // var_dump($ds_film);
        return view('pages.danhmuc',compact('danhmuc','ds_film','ds_theloai','ds_hot','ds_new')); 

        // $ds_new = News::where('new',1)->take(4)->get()->toArray();
        // $ds_hot = News::where('hot',1)->get()->toArray();
        // if($url=='HOT')
        // {
        // $ds_film = News::where('news.hot',1)
        //         ->get()->toArray();
        // }
        // if($url=='NEW')
        // {
        // $ds_film = News::where('news.new',1)
        //         ->get()->toArray();
        // }
        // $danhmuc = $url;
        //  $ds_theloai = TheLoai::all()->toArray();
        // // var_dump($ds_film);

        // return view('pages.danhmuc',compact('danhmuc','ds_film','ds_theloai','ds_hot','ds_new'));
    }
    
    
}
