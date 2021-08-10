<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tag;
use App\Models\Post;

class TagController extends Controller
{
    //

    public function storetag(Request $request)
    {
        $tag = tag::firstOrCreate(
            ['tagname' =>  request('tagsname')]
        );
        return redirect("home");
    }

    public function destroy($id)
    {
            $data = tag::find($id);
            $data->delete();
            return redirect('home');
        
    }
}
