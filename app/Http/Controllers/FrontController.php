<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.home')->with('posts',Post::all())
            ->with('categories',Category::all());
    }
    public function post($id)
    {

        return view('frontend.post')->with('post',Post::find($id))
            ->with('categories',Category::all());
    }
    public function search(Request $request)
    {
        $posts=Post::where('title', 'LIKE', '%'.$request->q.'%')->get();
        return view('frontend.search')->with('posts',$posts)
            ->with('categories',Category::all());
    }

}
