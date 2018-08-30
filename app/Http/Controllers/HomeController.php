<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Setting;
use App\Tag;
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

    public function single($slug)
    {
    	$post = Post::where('slug', $slug)->first();
    	$prev = Post::where('id', '<', $post->id)->max('id');
	    $next = Post::where('id', '>', $post->id)->min('id');

    	return view('single')->with('settings', Setting::first())
	                         ->with('categories', Category::take(4)->get())
	                         ->with('post', $post)
	                         ->with('all_tags', Tag::all())
	                         ->with('prev', Post::find($prev))
	                         ->with('next', Post::find($next));;
    }
}
