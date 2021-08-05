<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tag;
use App\Models\post;
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
        return view('home',['tags'=>$tags]);
    }


    public function savepost(Request $request)
    {
        $post = new post;
        $post->users_id=Auth::user()->id;
        $post->tag_id=0;
        $post->comment_id=0;
        $post->posttitle=$request->posttitle;
        $post->postdescription=$request->postdescription;
        
        $post->posttag=implode(" ",$request->posttag);
        if($request->hasFile('postimage')){
            $file=$request->file('postimage');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('uploads/post/',$filename);
            $post->postimage=$filename;
        }
        $post->save();
        return redirect("home");

    }
}
