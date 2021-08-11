<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tag;
use App\Models\Post;
use App\Models\User;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;
use Notification;

use App\Notifications\AlertNotification;
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
        $posts=Post::paginate(3);;
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
     $response=  Post::create([
           'posttitle'=>$request->posttitle,
           'postdescription'=>$request->postdescription,
           'tag_id'=>implode(" ",$request->tag_id),
           'postimage'=>$filename,
           'users_id'=>Auth::user()->id,
           'comment_id'=>0  
        ]);
    //    return $response;
        
     
        
        $username=Auth::user()->name;
        $user=Auth::user();
        // $data =  Post::where('id',$request->id)->first();
        $title = $response->posttitle;
        // return $title;
        $details=[
            'greetings'=>$username, 
            'body'=>$title,        
            'upload' => 'Post uploaded!',
        ];
        // return dd($details);
        Notification::send($user, new AlertNotification($details));
        return redirect("home");
    }


    public function viewpost()
    {
        $posts=Post::all();
        return view('home',compact('posts'));
     
    }
        

    public function sendnotification(Request $request){

        // $user->notify(new Comment($details));

        return redirect()->route('post', ['id' => $request->id]);
    }

    public function marknotification(){

                auth()->user()->unreadNotifications->markAsRead();
                return redirect()->back();
    }
      
        
        
    }