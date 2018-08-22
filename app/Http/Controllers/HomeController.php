<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Setting;
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
        return view('index')->with('settings', Setting::first())
	        ->with('categories', Category::take(4)->get())
	        ->with('first_post', Post::orderBy('created_at', 'desc')->first())
	        ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
	        ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
	        ->with('php_category_posts', Category::find(4)->posts()->take(3)->get())
	        ->with('drupal_category_posts', Category::find(2)->posts()->take(3)->get())
	        ->with('laravel_category_posts', Category::find(3)->posts()->take(3)->get());
    }
}
