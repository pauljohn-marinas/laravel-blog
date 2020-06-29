<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $posts = auth()->user()->posts;
        return view('blog.post', compact('posts'));
    }

    public function create() {
        return view('blog.create');
    }

    public function store(Request $request) {
        $post = new Post;
        $post->user_id = auth()->user()->id;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->thumbnail = 'image';
        $post->save();

        return redirect(route('post.index'));
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('blog.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        return redirect(route('post.index'));
    }

    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect(route('post.index'));
    }
}
