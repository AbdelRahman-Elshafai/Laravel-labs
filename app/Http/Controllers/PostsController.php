<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;


class PostsController extends Controller
{
    public function index()
    {

        // dd("lol");     to stop execution for u to debug
        $posts = Post::all();

        // dd($posts);
        // return view("posts.index" , ["myName" => "Shafai"]);

        return view("posts.index" , ["posts" => $posts]);

    }

    public function create()
    {
        $users = User::all();

        return view("posts.create" , ["users" => $users]);
    }

    public function store()
    {

        $request = request();

        // $data = $request->all();

        // Post::create([
        //     "title" => $data['title'],
        //     "description" => $data['desc'],
        // ]);

        Post::create($request->all());

        return redirect()->route('posts.index');


    }

    public function edit(Post $post)
    {
        // $post = Post::where('id' , $post) ->get()->first();

        // $post = Post::where('id' , $post) ->first();

        // $post = Post::find($post);

        // $post = Post::findOrFail($post);

        // dd($post);

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
