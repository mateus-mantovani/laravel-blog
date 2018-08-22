<?php

namespace App\Http\Middleware;

use App\Tag;
use Closure;
use Illuminate\Support\Facades\Session;

class TagDelete
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
	    $tag = Tag::find($request->id);

	    if ($tag->core_tag) {
		    Session::flash('info', 'You can\'t delete this tag. It\'s part of core.');

		    return redirect()->back();
	    }

        return $next($request);
    }
}
