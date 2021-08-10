<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Post;
use Illuminate\Http\Request;

class CheckTag
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
// return dd($request);
        $post = Post::get();
// return dd($post);

        $tagid = [];
        $id=$request->route('id');
        foreach ($post as $posts) {
            $tagid[] = $posts->tag_id;
        }
        // return dd($tagid);      
        $valid = in_array($id, $tagid);
        if ($valid) {
            return redirect()->back();
        } else {
            return $next($request);
        }
        
    }
}
