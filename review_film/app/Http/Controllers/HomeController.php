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
        // $this->middleware('auth');
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
}
