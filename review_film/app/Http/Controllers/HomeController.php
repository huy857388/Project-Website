<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Comment;
use App\TheLoai;
use Carbon\Carbon;
use DB;

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
        $ds_new = News::where('new',1)->take(4)->get()->toArray();
        $ds_hot = News::where('hot',1)->get()->toArray();
         $ds_film = News::all()->toArray();
        $ds_cmt = Comment::all()->toArray();
        $ds_theloai = TheLoai::all()->toArray();
        // var_dump($ds_hot);
        return view('pages.home',compact('ds_decu','ds_hot','ds_new','ds_cmt','ds_theloai','ds_film'));
    }
// CHÚ Ý: nếu trang bị lỗi là do phần footer hiện HOT , NEW nhưng chưa truyền ds_hot, ds_new
    public function single($news_id){
        // Problem
        // Hình lệch? No comment? World new?
        // Chưa hoàn thiện phần comment? (đang ở dạng 1 tầng)
        // Dự tính: Ajax

        $news = News::find($news_id)->toArray();

        $ds_cmt = News::join('comment','news.id','=','comment.idBaiRv')
                ->where('news.id','=',$news['id'])
                ->get()->toArray();

        // var_dump($ds_cmt);
        // var_dump($news);

        $ds_theloai = TheLoai::all()->toArray();
        return view('pages.single',compact('news','ds_theloai','ds_cmt'));   
    }

    public function topComment(){
        // Problem
        // Hình lệch này? No Comment? datetime chưa định dạng? phần sao ở top 3 < ?
        // Link top 1, top 2 ?

        // Hàm xây dựng xếp hạng theo lượt bình luận của news
        $ds_top_news = News::join('comment','news.id','=','comment.idBaiRv')
                    ->select('news.id','news.idTheLoai','news.title','news.img','news.short_content','news.content','news.hot','news.new','news.DeCu','news.created_at',DB::raw('count(comment.idBaiRv) as count'))
                    ->groupBy('news.id','news.idTheLoai','news.title','news.img','news.short_content','news.content','news.hot','news.new','news.DeCu','news.created_at')
                    ->orderBy('count','desc')
                    ->take(10)->get()->toArray();
        // var_dump($ds_top_news);
        
        // Lấy phần tử đầu ra
        $first_news = array_shift($ds_top_news);
        $second_news = array_shift($ds_top_news);
        // var_dump($top_news);
        // var_dump($ds_top_news);

        $ds_new = News::where('new',1)->take(4)->get()->toArray();
        $ds_hot = News::where('hot',1)->get()->toArray();
        $ds_cmt = Comment::all()->toArray();
        $ds_theloai = TheLoai::all()->toArray();
        return view('pages.top_comment',compact('ds_new','ds_hot','ds_cmt','ds_theloai','first_news','second_news','ds_top_news'));
    }

    public function theLoai($url){
        // Problem
        // Link top1, top 2? No comment? phần sao top 3 <?
        // Ít hơn 2 tin thì làm s ?
        // Chưa làm paging nè? breadcrumbs?

        $ds_news = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('theloai.TenKhongDau','LIKE',$url)
                ->get()->toArray();
        $theloai = $ds_news[0]['Ten'];

        for ($i=0; $i < 15; $i++) { 
            $ds_news[] = $ds_news[0];
        }
        $first_news = array_shift($ds_news);
        $second_news = array_shift($ds_news);
        // var_dump($ds_news);

        $ds_theloai = TheLoai::all()->toArray();
        return view('pages.theloai',compact('theloai','first_news','second_news','ds_news','ds_theloai'));
    }

     public function danhmuc($url){
        $ds_new = News::where('new',1)->take(4)->get()->toArray();
        $ds_hot = News::where('hot',1)->get()->toArray();
        if($url=='HOT')
        {
        $ds_film = News::where('news.hot',1)
                ->get()->toArray();
        }
        if($url=='NEW')
        {
        $ds_film = News::where('news.new',1)
                ->get()->toArray();
        }
        $danhmuc = $url;
         $ds_theloai = TheLoai::all()->toArray();
        // var_dump($ds_film);

        return view('pages.danhmuc',compact('danhmuc','ds_film','ds_theloai','ds_hot','ds_new'));
    }
    public function postComment(Request $rq){
        var_dump($rq->all());
        $cmt = new Comment;
        $cmt->idUser = 1;
        $cmt->idBaiRv = 1;
        $cmt->NoiDung = $rq->content;
        $cmt->created_at = Carbon::now()->toDateTimeString();
        $cmt->updated_at = Carbon::now()->toDateTimeString();

        $cmt->save();
        return redirect()->back();
    }
}
