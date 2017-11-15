<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function index(){
    	return view('posts.index');
    }

    public function show(){
    	$posts = Post::all();
    	return view('posts.show', compact('posts'));
    }

    public function createPost(){
    	$title = Input::get('title');
    	$body = Input::get('body');
    	$users_id = 1;
    	$insert = Post::insert( compact('title', 'body', 'users_id') );
    	if($insert == true){
    		return redirect('/posts');	
    	}else{
    		return "<script>alert('Error on creating post');</script>";
    	}
    }

    public function viewPost(){
    	return view('posts.new_post');
    }

    
}
