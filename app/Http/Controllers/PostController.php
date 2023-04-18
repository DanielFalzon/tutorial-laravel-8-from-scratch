<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
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

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'thumbnail' => 'required|image'
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['slug'] = Str::slug($attributes['title']);
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnail');

        Post::create($attributes);

        return redirect('/');
    }

    //index, show, create, store, edit, update, destroy (always try to stick to these 7 Restful actions as functions when creating a controller)
}
