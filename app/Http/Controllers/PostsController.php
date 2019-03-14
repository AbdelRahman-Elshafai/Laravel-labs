<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view("posts.index", ["posts" => Post::simplePaginate(5)]);
    }

    public function create()
    {
        return view("posts.create", ["users" => User::all()]);
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        Post::findOrFail($post->id)->update(request()->all());
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        Post::findOrFail($post->id)->delete();


        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
}
