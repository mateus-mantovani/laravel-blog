<?php

namespace App\Http\Middleware;

use Closure;
use App\Category;
use Illuminate\Support\Facades\Session;

class CategoryDelete
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    	$category = Category::find($request->id);

    	if ($category->core_category) {
		    Session::flash('info', 'You can\'t delete this category. It\'s part of core.');

		    return redirect()->back();
	    }

        return $next($request);
    }
}
