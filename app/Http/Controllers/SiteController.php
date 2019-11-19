<?php

namespace App\Http\Controllers;

use App\Post;

use App\Http\Requests;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function showHome(){
        $posts = Post::with('author')->get();
        return view('home', compact('posts'));
    }

    public function showPost($slug){
        $post = Post::whereSlug($slug)->with('author')->firstOrFail();
        return view('post', compact('post'));
    }
}
