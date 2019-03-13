<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;


class PostsController extends Controller
{
    public function index()
    {

        return view("posts.index" , ["posts" => Post::all()]);

    }

    public function create()
    {

        return view("posts.create" , ["users" => User::all()]);
    }

    public function store()
    {

        Post::create(request()->all());

        return redirect()->route('posts.index');


    }

    public function edit(Post $post)
    {

        return view('posts.edit'  , ['post' => $post]);
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

        return view('posts.show' , ['post' => $post]);

    }
}
