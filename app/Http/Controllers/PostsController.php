<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\Validator;

use App\Post;



class PostsController extends Controller
{
    
    public function  index()
    {
        

        $posts=Post::latest()

        ->filter(request(['month','year']))

        ->get();

          	
        return view('index',compact('posts'));
    }

    

     public function  show($id)
    {
        
        $post=Post::find($id);

    	return view('posts.show',compact('post'));
    }
    
     public function  create()
    {
    	
    	return view('posts.create');
    }

    public function  store()
    {
    	$this->validate(request(),[
    		'title'=>'bail|required',
    		'body'=>'required'
    			
    	]);

        auth()->user()->publish(
            new Post(request(['title','body']))

        );

        session()->flash('message','Your post has now been published.');

        
    	return redirect('/');
    }
}
