<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tag;
use App\Models\Post;
use App\Models\User;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $tags=tag::all();
        $posts=Post::all();
        return view('home',compact('tags','posts'));
     
    }
           

    public function savepost(Request $request)
    {
        if($request->hasFile('postimage')){
            $file=$request->file('postimage');
            $filename=$request->file('postimage')->hashName();
            $file->move('uploads/post/',$filename);
            // $post->postimage=$filename;
        }
       Post::create([
           'posttitle'=>$request->posttitle,
           'postdescription'=>$request->postdescription,
           'tag_id'=>implode(" ",$request->tag_id),
           'postimage'=>$filename,
           'users_id'=>Auth::user()->id,
           'comment_id'=>0
        
       ]);

        return redirect("home");

    }


    public function viewpost()
    {
        $posts=Post::all();
        return view('home',compact('posts'));
     
    }
        




        }