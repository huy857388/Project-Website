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

    // public $ds_theloai;
    // public $ds_new;
    // public $ds_decu;
    // public $ds_hot;
    // public $ds_cmt;
    // public $ds_theloai;

    public function __construct()
    {
        // $this->middleware('auth');
        // $this->ds_new = News::where('new',1)->take(4)->get()->toArray();
        // $this->ds_decu = News::where('deCu',1)->take(3)->get()->toArray();
        // $this->ds_hot = News::where('hot',1)->get()->toArray();
        // $this->ds_cmt = Comment::all()->toArray();
        // $this->ds_theloai = TheLoai::all()->toArray();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds_new = News::where('new',1)->take(4)->get()->toArray();
        $ds_decu = News::where('deCu',1)->take(3)->get()->toArray();
        $ds_hot = News::where('hot',1)->get()->toArray();
        $ds_cmt = Comment::all()->toArray();
        $ds_theloai = TheLoai::all()->toArray();
        // var_dump($ds_hot);
        return view('pages.home',compact('ds_decu','ds_hot','ds_new','ds_cmt','ds_theloai'));
    }

    public function single(){
        $ds_new = News::where('new',1)->take(4)->get()->toArray();
        $ds_decu = News::where('deCu',1)->take(3)->get()->toArray();
        $ds_hot = News::where('hot',1)->get()->toArray();
        $ds_cmt = Comment::all()->toArray();
        $ds_theloai = TheLoai::all()->toArray();
        return view('pages.single',compact('ds_decu','ds_hot','ds_new','ds_cmt','ds_theloai'));   
    }
}
