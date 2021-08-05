<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tag;
class TagController extends Controller
{
    //

    public function storetag(Request $request)
    {
        $tag = tag::firstOrCreate(
            ['tagname' =>  request('tagsname')]        
        );
        return redirect("home");
        // $tag = new tag;
        // $tag->tagname=$request->tagsname;
        // $tag->save();
        // return redirect("home");
    }

}
