<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
      function index()
    {
        return view('index');
    }

    function blog()
    {
            $posts = Post::with('category')->latest()->get();
    return view('blog', compact('posts'));
    }

    function contact()
    {
        return view('contact');
    }
        function projects()
    {
        return view('projects');
    }
}
