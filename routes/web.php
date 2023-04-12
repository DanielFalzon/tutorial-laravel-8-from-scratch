<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');
//route model binding
//1. Wildcard name must match the model name + variable name
Route::get('/post/{post}', [PostController::class, 'show']); //->whereAlpha, ->whereNumeric, options to add constraints to wildcard
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);