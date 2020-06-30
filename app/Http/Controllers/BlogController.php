<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::orderBy('id', 'desc')->paginate(9);
        return view('blog.index', compact('posts'));
    }

    
}