<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $user = auth()->user();

        $post = new Post();
        $post->title =$request->input('title');
        $post->content = $request->input('content');
        $post->user_id = $user->id;
        $post->save();

        return redirect()->route('posts.index');
    }

    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }
}
