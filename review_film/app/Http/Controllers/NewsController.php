<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\News;
use App\TheLoai;
use App\User;
use App\Comment;
use App\SubComment;
use Carbon\Carbon;

use DB;
use Auth;

class NewsController extends Controller
{
    public function single($theloai_url,$news_url){
        // Problem
        // Hình lệch? No comment? World new? datetime chưa định dạng?
        // Comment nhìu quá làm s? (xem thêm? => ajax or thg`)
        $news = News::where('slug','LIKE',$news_url)
                ->first()->toArray();

        // Chuyển json img thành mảng img
        $arr_img = json_decode($news['img']);
        $news['img'] = $arr_img;

        $ds_new = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.new','=',1)
                ->take(4)->get()->toArray();

        $ds_hot = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.hot','=',1)
                ->get()->toArray();   
        
        // var_dump($news);                        
        $theloai = TheLoai::where('TenKhongDau','LIKE',$theloai_url)
                ->first();       

        $ds_cmt = User::join('comment','users.id','=','comment.idUser')
                ->select('users.name','comment.id','comment.idUser','comment.NoiDung','comment.updated_at')
                ->where('comment.idBaiRv','=',$news['id'])
                ->get()->toArray();
        
        $count_cmt = empty($ds_cmt)? 0 : count($ds_cmt);                
        for ($i=0; $i < count($ds_cmt) ; $i++) { 
            $sub_cmt = User::join('subcomment','users.id','=','subcomment.idUser')
                    ->select('users.name','subcomment.id','subcomment.idUser','subcomment.updated_at','subcomment.NoiDung')
                    ->where('subcomment.idComment','=',$ds_cmt[$i]['id'])
                    ->get()->toArray();
            $ds_cmt[$i]['sub_cmt'] = $sub_cmt;

            $count_cmt += empty($sub_cmt)? 0 : count($sub_cmt);
        }

        $ds_theloai = TheLoai::all()->toArray();

        // Danh sách news follower
        if(Auth::check())
            $ds_follows = json_decode(Auth::user()->follow_IdBaiRv);
        else
            $ds_follows = null;

        return view('pages.single',compact('ds_new','ds_hot','news','ds_theloai','ds_cmt','theloai','count_cmt','theloai_url','ds_follows'));   
    }

    public function topComment(){
        // Problem
        //  phần sao ở top 3 trở xuống thì s?
        // Link top 1, top 2 ?        
        $ds_new = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.new','=',1)
                ->take(4)->get()->toArray();

        $ds_hot = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.hot','=',1)
                ->get()->toArray();   

		// B1: lấy toàn bộ news thuộc thể loại này
        $ds_top_news = TheLoai::join('news','news.idTheLoai','=','theloai.id')            
            ->get()->toArray(); 
         
		// B2: lấy toàn bộ cmt của mỗi news trên
        for ($i=0; $i < count($ds_top_news) ; $i++) { 
        	$ds_cmt = Comment::where('idBaiRv','=',$ds_top_news[$i]['id'])
        			->select('id')
        			->get()->toArray();
									
			// B3: lấy toàn bộ sub_cmt của mỗi cmt trên
        	$total_sub_cmt = 0;
 			for ($j=0; $j < count($ds_cmt); $j++) {
 			 	$count_sub_cmt = SubComment::where('idComment','=',$ds_cmt[$j]['id'])
 			 				->count();
 			 	$ds_cmt[$j]['count_sub_cmt'] = $count_sub_cmt;
 			 	$total_sub_cmt += $count_sub_cmt; 			 	
 			}   

 			// B4: đếm từ sub_cmt ra cmt
 			$ds_top_news[$i]['count'] = count($ds_cmt) + $total_sub_cmt;
 			unset($ds_top_news[$i]['cmt']);		
        }
	
		// B5: so sánh và lấy TOP 2
		// Sort theo count_cmt
		usort($ds_top_news,function($news_one,$news_two){
	    	return $news_one['count']<$news_two['count'];
	    });                

        // Lọc bớt để lấy TOP 10 thôi
        define("PER_PAGE",10);
        $count_top_news = count($ds_top_news);
        for ($i=PER_PAGE; $i < $count_top_news; $i++) { 
            unset($ds_top_news[$i]);
        }                    

        // Lấy slug của thể loại
        for ($i=0; $i < count($ds_top_news) ; $i++) { 
            $ds_top_news[$i]['TenKhongDau'] = TheLoai::where('id','=',$ds_top_news[$i]['idTheLoai'])
                                        ->select('TenKhongDau')->first()->TenKhongDau; 
        }
        // Chuyển json img thành mảng img
        for ($i=0; $i < count($ds_top_news) ; $i++) { 
            $arr_img = json_decode($ds_top_news[$i]['img']);
            $ds_top_news[$i]['img'] = $arr_img;
        }
        // var_dump($ds_top_news);
        // Lấy phần tử đầu ra
        $first_news = null; $second_news = null;
        if(count($ds_top_news) > 0){
            $first_news = array_shift($ds_top_news);
            if(count($ds_top_news) > 0)  $second_news = array_shift($ds_top_news);
        }   
          
        $ds_cmt = User::join('comment','users.id','=','comment.idUser')
                    ->select('users.name','comment.NoiDung')
                    ->take(4)->get()->toArray();

        $ds_theloai = TheLoai::all()->toArray();
        return view('pages.top_comment',compact('ds_new','ds_hot','ds_cmt','ds_theloai','first_news','second_news','ds_top_news'));
    }

    public function theLoai($theloai_url){
        // Problem
        // phần sao top 3 <?        
        $ds_new = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.new','=',1)
                ->take(4)->get()->toArray();

        $ds_hot = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.hot','=',1)
                ->get()->toArray();   
        
        $ds_cmt = User::join('comment','users.id','=','comment.idUser')
                    ->select('users.name','comment.NoiDung')
                    ->take(4)->get()->toArray();                                        

        define('PER_PAGE', 1);
        // paginate(n) nếu số phần tử tìm dc <= n => lỗi undefined offset 0        
        $ds_news = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('theloai.TenKhongDau','LIKE',$theloai_url)
                ->paginate(PER_PAGE)->toArray(); 
        
        // Chuyển json img thành mảng img
        for ($i=0; $i < count($ds_news['data']) ; $i++) { 
            $arr_img = json_decode($ds_news['data'][$i]['img']);
            $ds_news['data'][$i]['img'] = $arr_img;
        }                
        
        //  1 trang phải có ít nhất 3 phần tử : Nếu < 3 => lỗi undefined offset 0
        $first_news = null; $second_news = null;
        
        //  Tính tổng cmt và sub cmt của các news thuộc thể loại này
		// B1: lấy toàn bộ news thuộc thể loại này
		$ds_all_news = TheLoai::join('news','news.idTheLoai','=','theloai.id')
            ->where('theloai.TenKhongDau','LIKE',$theloai_url)
            ->get()->toArray(); 
         // var_dump($ds_all_news);
		// B2: lấy toàn bộ cmt của mỗi news trên
        for ($i=0; $i < count($ds_all_news) ; $i++) { 
        	$count_cmt = Comment::where('idBaiRv','=',$ds_all_news[$i]['id'])
        			->select('id')
        			->get()->toArray();
									
			// B3: lấy toàn bộ sub_cmt của mỗi cmt trên
        	$total_sub_cmt = 0;
 			for ($j=0; $j < count($count_cmt); $j++) {
 			 	$count_sub_cmt = SubComment::where('idComment','=',$count_cmt[$j]['id'])
 			 				->count();
 			 	$count_cmt[$j]['count_sub_cmt'] = $count_sub_cmt;
 			 	$total_sub_cmt += $count_sub_cmt;
 			 	// echo "Comment id {$ds_cmt[$j]['id']} có ".$ds_sub_cmt." sub cmt.!</br>"; 
 			}   

 			// B4: đếm từ sub_cmt ra cmt
 			$ds_all_news[$i]['count_cmt'] = count($count_cmt) + $total_sub_cmt;
 			unset($ds_all_news[$i]['cmt']);		
        }
	
		// B5: so sánh và lấy TOP 2
		// Sort theo count_cmt
		usort($ds_all_news,function($a,$b){
	    	return $a['count_cmt']<$b['count_cmt'];
	    });			

        // Chuyển json img thành mảng img
        for ($i=0; $i < count($ds_all_news) ; $i++) { 
            $arr_img = json_decode($ds_all_news[$i]['img']);
            $ds_all_news[$i]['img'] = $arr_img;
        }
		
		if(count($ds_all_news) > 0){
			$first_news = $ds_all_news[0];

			if(count($ds_all_news) > 1){
				$second_news = $ds_all_news[1];
			}
		}

      	if($ds_news['total'] == 0) $ds_news = null;
        $ds_theloai = TheLoai::all()->toArray();
        return view('pages.theloai',compact('theloai_url','ds_news','ds_theloai','ds_new','ds_hot','first_news','second_news','ds_cmt'));
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
            $sub_cmt->Name = Auth()->user()->name;
            echo json_encode($sub_cmt);
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
    
        $ds_news = TheLoai::join('news','theloai.id','=','news.idTheLoai')
                ->select('theloai.Ten','theloai.TenKhongDau','news.title','news.slug','news.img','news.short_content','news.updated_at');   
        
        if(!empty($tu_khoa)){
            foreach ($arr_key as $key) {
                $ds_news->orWhere('news.title','LIKE','%'.$key.'%');
            }                
        }
        else $tu_khoa = 'all';

        $ds_news = $ds_news->get()->toArray();
        // Chuyển json img thành mảng img
        for ($i=0; $i < count($ds_news) ; $i++) { 
            $arr_img = json_decode($ds_news[$i]['img']);
            $ds_news[$i]['img'] = $arr_img;
        }   

        $ds_new = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.new','=',1)
                ->take(4)->get()->toArray();

        $ds_hot = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.hot','=',1)
                ->get()->toArray();      
        
        $ds_cmt = User::join('comment','users.id','=','comment.idUser')
                    ->select('users.name','comment.NoiDung')
                    ->take(4)->get()->toArray();                

        $ds_theloai = TheLoai::all()->toArray();                           
        return view('pages.search',compact('ds_new','ds_hot','ds_theloai','ds_news','tu_khoa','ds_cmt'));
    }

    public function deleteComment($id_cmt){               
		$cmt = Comment::find($id_cmt);
		$ds_sub_cmt = SubComment::where('idComment','=',$id_cmt)
					->get();
		foreach ($ds_sub_cmt as $sub_cmt) {
			$sub_cmt->delete();
		}
		$cmt->delete();	
		echo "Xoá Cmt r`!";		
    }

    public function deleteSubComment($id_sub_cmt){        
    	$sub_cmt = SubComment::find($id_sub_cmt);
    	$sub_cmt->delete();
    	echo "Xoá SubCmt r`!";    	
    }

    public function getFollow(){
        $user = User::find(Auth::user()->id);
        
        if(empty($user->follow_IdBaiRv))
            $ds_news = null;
        else{            
            $ds_follows = json_decode($user->follow_IdBaiRv);

            $ds_news = TheLoai::join('news','theloai.id','=','news.idTheLoai')
                ->select('theloai.Ten','theloai.TenKhongDau','news.title','news.slug','news.img','news.short_content','news.updated_at');   
        
           
            foreach ($ds_follows as $id) {
                $ds_news->orWhere('news.id','=',$id);
            }                               
            $ds_news = $ds_news->get()->toArray();

            // Chuyển json img thành mảng img
            for ($i=0; $i < count($ds_news) ; $i++) { 
                $arr_img = json_decode($ds_news[$i]['img']);
                $ds_news[$i]['img'] = $arr_img;
            }   

        } 

        $ds_new = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.new','=',1)
                ->take(4)->get()->toArray();

        $ds_hot = TheLoai::join('news','news.idTheLoai','=','theloai.id')
                ->where('news.hot','=',1)
                ->get()->toArray();      
        
        $ds_cmt = User::join('comment','users.id','=','comment.idUser')
                    ->select('users.name','comment.NoiDung')
                    ->take(4)->get()->toArray();  

        $ds_theloai = TheLoai::all()->toArray();                      
        return view('pages.follow',compact('ds_news','ds_new','ds_hot','ds_cmt','ds_theloai'));
    }

    public function followNews($news_id){
        $user = User::find(Auth::user()->id);

        if(empty($user->follow_IdBaiRv))
            $ds_follows = array();
        else 
            $ds_follows = json_decode($user->follow_IdBaiRv);
        if(!in_array($news_id, $ds_follows)) array_unshift($ds_follows,$news_id);

        $user->follow_IdBaiRv = json_encode($ds_follows);

        $user->save();
        echo "Đã follow news có id là: $news_id";        
    }

    public function unfollowNews($news_id){
        $user = User::find(Auth::user()->id);

        if(empty($user->follow_IdBaiRv))
            return "gặp lỗi unfollow rồi!";
        
        $ds_follows = json_decode($user->follow_IdBaiRv);
        // echo json_encode($ds_follows);
        $key = array_search($news_id, $ds_follows);
        unset($ds_follows[$key]);        
        // Xoá xog cái nó hiện ra cả key và value? json từ [""] => {"":""}
        $arr_idFollows = array();
        foreach ($ds_follows as $id) {
            $arr_idFollows[] = $id;  }

        // echo json_encode($ds_follows);
        // echo json_encode($arr_idFollows);
        if(empty($arr_idFollows)) $user->follow_IdBaiRv = null;
        else $user->follow_IdBaiRv = json_encode($arr_idFollows);

        $user->save();
        echo "Đã unfollow news có id là: $news_id";       
    }
}