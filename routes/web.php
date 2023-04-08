<?php

use App\Models\Post;
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
    return view(view: 'posts', data: [
        'posts' => Post::all()
    ]);
});

//route model binding
//1. Wildcard name must match the model name + variable name
Route::get('/post/{post}', function (Post $post){
    return view('post', [
        'post' => $post
    ]);
}); //->whereAlpha, ->whereNumeric, options to add constraints to wildcard
