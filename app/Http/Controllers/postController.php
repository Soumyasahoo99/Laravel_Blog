<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\comment;
use App\Models\tag;
class postController extends Controller
{
    //
    public function viewpost($id)
    {
        $tag_details=Post::where('tag_id',$id)->get();
        $data = Post::where('id',$id)->first();
        $tag_name=explode(" ",$data->tag_id);
        $arr=array();
        foreach($tag_name as $tagname){
             $arr[]=tag::find($tagname);
        }
        // return dd($arr);
        $comment=comment::where('postid',$id)->get();
        return view('postview', compact('data','comment','tag_name','tag_details','arr'));
    }


    public function viewtag($id)
    {
        $posts=Post::where('tag_id',$id)->paginate(2);
        $tags=tag::all();
        return view('home', compact('posts','tags'));
    }





}





 



