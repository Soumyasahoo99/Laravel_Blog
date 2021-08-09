<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;
class commentcontroller extends Controller
{
    //
    public function storecomment(Request $request ,$id)
    {

        comment::create([
           'commentname'=>$request->commentname, 
           'users_id'=>Auth::user()->id,
            'postid'=>$id    
       ]);

        return back();

    }



    
}
