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
    public function single($theloai_url,$news_url){
        // Problem
        // Hình lệch? No comment? World new? datetime chưa định dạng?
        // Comment nhìu quá làm s? (xem thêm? => ajax or thg`)
        // Dự tính: Ajax
        $news = News::where('slug','LIKE',$news_url)
                ->first()->toArray();

        $ds_new = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.new','=',1)
                ->take(4)->get()->toArray();

        $ds_hot = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.hot','=',1)
                ->get()->toArray();   
        
        // var_dump($news);                        
        $theloai = TheLoai::where('TenKhongDau','LIKE',$theloai_url)
                ->select('Ten')->first()->Ten;       

        $ds_cmt = User::join('comment','users.id','=','comment.idUser')
                ->select('users.name','comment.id','comment.NoiDung','comment.updated_at')
                ->where('comment.idBaiRv','=',$news['id'])
                ->get()->toArray();
        
        $count_cmt = empty($ds_cmt)? 0 : count($ds_cmt);                
        // foreach ko chèn dc :))) chả hĩu
        // foreach ($ds_cmt as $cmt) {            
        //     $sub_cmt = SubComment::where('idComment','=',$cmt['id'])
        //                             ->get()->toArray();
        //     array_push($cmt,$sub_cmt);
        // }
        for ($i=0; $i < count($ds_cmt) ; $i++) { 
            $sub_cmt = User::join('subcomment','users.id','=','subcomment.idUser')
                    ->select('users.name','subcomment.updated_at','subcomment.NoiDung')
                    ->where('subcomment.idComment','=',$ds_cmt[$i]['id'])
                    ->get()->toArray();
            $ds_cmt[$i]['sub_cmt'] = $sub_cmt;

            $count_cmt += empty($sub_cmt)? 0 : count($sub_cmt);
        }

        $ds_theloai = TheLoai::all()->toArray();

        return view('pages.single',compact('ds_new','ds_hot','news','ds_theloai','ds_cmt','theloai','count_cmt'));   
    }

    public function topComment(){
        // Problem
        // Hình lệch này? No Comment? datetime chưa định dạng? phần sao ở top 3 < ?
        // Link top 1, top 2 ?        

        $ds_new = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.new','=',1)
                ->take(4)->get()->toArray();

        $ds_hot = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.hot','=',1)
                ->get()->toArray();   

        // Hàm xây dựng xếp hạng theo lượt bình luận của news
        $ds_top_news = News::join('comment','news.id','=','comment.idBaiRv')
                    ->select('news.id','news.idTheLoai','news.title','news.slug','news.img','news.short_content','news.content','news.hot','news.new','news.created_at',DB::raw('count(comment.idBaiRv) as count'))
                    ->groupBy('news.id','news.idTheLoai','news.title','news.slug','news.img','news.short_content','news.content','news.hot','news.new','news.created_at')
                    ->orderBy('count','desc')
                    ->take(10)->get()->toArray();
        
        // var_dump($ds_top_news);
        // Lấy slug của thể loại
        for ($i=0; $i < count($ds_top_news) ; $i++) { 
            $ds_top_news[$i]['TenKhongDau'] = TheLoai::where('id','=',$ds_top_news[$i]['idTheLoai'])
                                        ->select('TenKhongDau')->first()->TenKhongDau; 
        }
        
        // Lấy phần tử đầu ra
        $first_news = array_shift($ds_top_news);
        $second_news = array_shift($ds_top_news);
        // var_dump($top_news);
        // var_dump($ds_top_news);

        $ds_cmt = Comment::all()->toArray();
        $ds_theloai = TheLoai::all()->toArray();
        return view('pages.top_comment',compact('ds_new','ds_hot','ds_cmt','ds_theloai','first_news','second_news','ds_top_news'));
    }

    public function theLoai($theloai_url){
        // Problem
        // Link top1, top 2? No comment? phần sao top 3 <?
        // Ít hơn 2 tin thì làm s ?
        // Chưa làm paging nè? breadcrumbs?
        $ds_new = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.new','=',1)
                ->take(4)->get()->toArray();

        $ds_hot = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.hot','=',1)
                ->get()->toArray();                         
        
        // const PER_PAGE = 2; 
        define('PER_PAGE', 3);
        // paginate(n) nếu số phần tử tìm dc <= n => lỗi undefined offset 0
        $ds_news = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('theloai.TenKhongDau','LIKE',$theloai_url)
                ->paginate(PER_PAGE)->toArray(); 

        // for ($i=0; $i < 15 ; $i++) { 
        //     $ds_news['data'][] = $ds_news['data'][0];
        // }
              
        //  1 trang phải có ít nhất 3 phần tử : Nếu < 3 => lỗi undefined offset 0
        $first_news = null; $second_news = null;
        // if( $ds_news['per_page'] > 2){                                 
        if( $ds_news['total'] > 2){                                 
            // 2 tin này có thể là top comment or top rating của thể loại này
            // Chọn comment vậy
            // $top_news_cmt = News::join('comment');

            $first_news = array_shift($ds_news['data']);
            $second_news = array_shift($ds_news['data']); 
        }else{
            // Không thể tạo first và second news => cần xử lý
        }
        
        
        // var_dump($ds_news);
        // var_dump($first_news);
        // var_dump($second_news);
        $ds_theloai = TheLoai::all()->toArray();
        return view('pages.theloai',compact('ds_news','ds_theloai','ds_new','ds_hot','first_news','second_news'));
    }

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
    
    public function postComment(Request $rq){
        // echo json_encode($rq->all());
        // var_dump($rq->all());
        if(empty($rq->idComment)){
            $cmt = new Comment;
            $cmt->idUser = Auth()->user()->id;

            $cmt->idBaiRv = $rq->idBaiRv;
            $cmt->NoiDung = $rq->content;
            $cmt->remember_token = $rq->_token;
            $cmt->created_at = Carbon::now()->toDateTimeString();
            $cmt->updated_at = Carbon::now()->toDateTimeString();

            $cmt->save();
            // return redirect()->back();    
            $cmt->Name = Auth()->user()->name;
            echo json_encode($cmt);
        }
        else{
            $sub_cmt = new SubComment;
            $sub_cmt->idUser = Auth()->user()->id;
            $sub_cmt->idComment = $rq->idComment;
            $sub_cmt->NoiDung = $rq->content;
            $sub_cmt->remember_token = $rq->_token;
            $sub_cmt->created_at = Carbon::now()->toDateTimeString();
            $sub_cmt->updated_at = Carbon::now()->toDateTimeString();

            $sub_cmt->save();
            return redirect()->back();    
            // echo json_encode($sub_cmt);
        } 
    }

    public function fullTextSearch(Request $rq){
        $tu_khoa = $rq->key;
        // Không dấu : Ok.
        // Có dấu: Ok.
        // Khoảng trắng đầu + đuôi: Ok
        // Khoảng trắng dư giữa chuỗi: cần xử lý
        $tu_khoa = preg_replace('/\s+/', ' ', $tu_khoa);
        $arr_key = explode(' ',$tu_khoa);
        array_unshift($arr_key, $tu_khoa);
        // var_dump($arr);

        $ds_news = News::where('title','LIKE','%'.$tu_khoa.'%')
                ->get()->toArray();
    
        $ds_news = TheLoai::join('news','theloai.id','=','news.idTheLoai')
                ->select('theloai.Ten','theloai.TenKhongDau','news.title','news.slug','news.img','news.short_content','news.updated_at');   
        
        foreach ($arr_key as $key) {
            $ds_news->orWhere('news.title','LIKE','%'.$key.'%');
        }                

        $ds_news = $ds_news->get()->toArray();

        $ds_new = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.new','=',1)
                ->take(4)->get()->toArray();

        $ds_hot = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.hot','=',1)
                ->get()->toArray();      

        $ds_theloai = TheLoai::all()->toArray();                           
        return view('pages.search',compact('ds_new','ds_hot','ds_theloai','ds_news','tu_khoa'));
    }
}
