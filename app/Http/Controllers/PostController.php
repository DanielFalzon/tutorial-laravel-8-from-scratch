<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Collection;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index()
    {
        return view(view: 'posts.index', data: [
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author'])
            )->paginate(10)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    //index, show, create, store, edit, update, destroy (always try to stick to these 7 Restful actions as functions when creating a controller)
}
