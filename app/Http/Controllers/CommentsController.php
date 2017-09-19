<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
    	if($user = Auth::user()) {
	      	$this->validate(request(), ['body'=> 'required|min:2']);
	      	
	   		$post->addComment(request('body', $post));

	   		// session()->flash('message', 'Your comment has been submitted.');

	   		return back();     
	    }
	    else {
        	// session()->flash('message', 'You must be signed in to comment.');

   			return view('auth.login');  
	    }
    }
}
