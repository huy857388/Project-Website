<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = @file_get_contents("https://doantnnhom3.000webhostapp.com/api/news/read.php");

        var_dump(json_decode($data));
        // Có thể dùng Curl
        return view('home');
    }
}
