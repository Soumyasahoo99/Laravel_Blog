<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
use Notification;
use Illuminate\Support\Facades\Auth;
use App\Notifications\Notifycomment;
class commentcontroller extends Controller
{
    //
    public function storecomment(Request $request ,$id)
        {
    
           $response= comment::create([
               'commentname'=>$request->commentname, 
               'users_id'=>Auth::user()->id,
                'postid'=>$id    
           ]);
           $username=Auth::user()->name;
           $user=Auth::user();
           $title = $response->commentname;
           $details=[
               'greetings'=>$username, 
               'body'=>$title,       
               'thanks' => 'Thank you for comments!',
           ];
           // return dd($details);
           Notification::send($user, new Notifycomment($details));
        //    return redirect("home");
            return back();
    
        }




}
