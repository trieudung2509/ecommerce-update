<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Show the application frontend home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::where([
            ['status', '=', '1'],
            ['is_home', '=', '1'],
        ])->orderBy('created_at', 'desc')->limit(3)->get();
        return view('frontend.index', compact('blogs'));
    }
}
