<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        $Post = Post::all();

        return view('blog.index')->with(['Post' => $Post]);

    }

    public function store(Request $request){
        Post::create([
            'title' =>$request->title,
            'body' =>$request->body 
        ]);

        return back();
    }

}
