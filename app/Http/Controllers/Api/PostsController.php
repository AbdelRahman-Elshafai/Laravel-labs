<?php

namespace App\Http\Controllers\Api;

use App\Post;

use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        return Post::all();
    }
}
