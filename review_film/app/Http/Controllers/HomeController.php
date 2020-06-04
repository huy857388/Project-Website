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

        // Chuyển json img thành mảng img
        for ($i=0; $i < count($ds_new) ; $i++) { 
            $arr_img = json_decode($ds_new[$i]['img']);
            $ds_new[$i]['img'] = $arr_img;
        }    

        // Chuyển json img thành mảng img
        for ($i=0; $i < count($ds_hot) ; $i++) { 
            $arr_img = json_decode($ds_hot[$i]['img']);
            $ds_hot[$i]['img'] = $arr_img;
        }   

        // Chuyển json img thành mảng img
        for ($i=0; $i < count($ds_film) ; $i++) { 
            $arr_img = json_decode($ds_film[$i]['img']);
            $ds_film[$i]['img'] = $arr_img;
        }   

        $ds_cmt = User::join('comment','users.id','=','comment.idUser')
                    ->select('users.name','comment.NoiDung')
                    ->take(4)->get()->toArray();    

        // var_dump($ds_cmt);
        $ds_theloai = TheLoai::all()->toArray();

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
                ->paginate(8);
        }
        if($url=='NEW')
        {       
            $ds_film = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.new','=',1)
                ->paginate(8);
        }

        // Chuyển json img thành mảng img
        for ($i=0; $i < count($ds_film) ; $i++) { 
            $arr_img = json_decode($ds_film[$i]['img']);
            $ds_film[$i]['img'] = $arr_img;
        }  
        
        $ds_cmt = User::join('comment','users.id','=','comment.idUser')
                    ->select('users.name','comment.NoiDung')
                    ->take(4)->get()->toArray();
        $danhmuc = $url;
        $ds_theloai = TheLoai::all()->toArray();
        
        return view('pages.danhmuc',compact('danhmuc','ds_film','ds_theloai','ds_hot','ds_new','ds_cmt')); 

       
    }
    public function toprated(){
        $ds_new = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.new','=',1)
                ->take(4)->get()->toArray();

        $ds_hot = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.hot','=',1)
               ->get()->toArray();   

        $ds_film = TheLoai::join('news','news.idTheLoai','=','theloai.id')->get()->sortByDesc("diem_danh_gia")->take(10)->toArray();      

        // Chuyển json img thành mảng img            
        foreach ($ds_film as $key => $news) {
            $arr_img = json_decode($news['img']);
            $ds_film[$key]['img'] = $arr_img;
        }
                
        $ds_theloai = TheLoai::all()->toArray();
       
         $top1=0;
         $top2=0;

        $ds_cmt = User::join('comment','users.id','=','comment.idUser')
                    ->select('users.name','comment.NoiDung')
                    ->take(4)->get()->toArray();
        return view('pages.top_rated',compact('ds_hot','ds_new','ds_cmt','ds_theloai','ds_film','top1','top2','ds_cmt'));
    }
    
    
}
