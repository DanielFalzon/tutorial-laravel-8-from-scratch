<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//    \Illuminate\Support\Facades\DB::listen(function ($query){
//        \Illuminate\Support\Facades\Log::info($query->sql, $query->bindings);
//    });
    return view(view: 'posts', data: [
        'posts' => Post::latest()->get(),
        'categories' => Category::all()
    ]);
});

//route model binding
//1. Wildcard name must match the model name + variable name
Route::get('/post/{post}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
}); //->whereAlpha, ->whereNumeric, options to add constraints to wildcard

Route::get('/categories/{category}', function (Category $category) {
    return view(view: 'posts', data: [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view(view: 'posts', data: [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});

