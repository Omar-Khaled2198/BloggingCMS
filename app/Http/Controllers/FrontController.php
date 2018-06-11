<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index()
    {
        return view('frontend.home')->with('posts',Post::all())
            ->with('categories',Category::all());
    }
}
