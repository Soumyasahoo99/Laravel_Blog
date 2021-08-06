<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class postController extends Controller
{
    //
    public function viewpost($id)
    {
        $data = Post::find($id);
        return view('postview', compact('data'));
    }
}
