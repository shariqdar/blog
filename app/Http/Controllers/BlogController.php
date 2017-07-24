<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function getSingle($slug){
    	//fetch from DB
    	$post=Post::where('slug','=',$slug)->first();
    	//return the view and pass in the post object
    	//$post=Post::find(1);
    	return view('blog.single')->withPost($post);//->withPost($post);
    }
    public function getIndex(){
    	$posts=Post::paginate(2);
    	return view('blog.index')->withPosts($posts);
    }
}
