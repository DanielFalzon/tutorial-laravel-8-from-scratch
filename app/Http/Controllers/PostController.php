<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Collection;

class PostController extends Controller
{
    public function index()
    {
        return view(view: 'posts', data: [
            'posts' => Post::latest()->filter(request(['search']))->get(),
            'categories' => Category::all()

        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'post' => $post
        ]);
    }
}
