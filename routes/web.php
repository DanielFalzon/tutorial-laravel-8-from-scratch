<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use MailchimpMarketing\ApiClient;

Route::post('newsletter', function (){
    request()->validate([
        'email' => 'required|email'
    ]);

    $mailchimp = new ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us21'
    ]);

    try{
        $response = $mailchimp->lists->addListMember('0947a8b418', [
            'email_address' => request('email'),
            'status' => 'subscribed'
        ]);

    } catch (Exception $exception)
    {
        throw ValidationException::withMessages([
            'email' => 'This email could not be added to our newsletter list'
        ]);
    }


   return redirect('/')->with('success', 'You are now signed up to our newsletter');
});

Route::get('/', [PostController::class, 'index'])->name('home');
//route model binding

//1. Wildcard name must match the model name + variable name
Route::get('/post/{post}', [PostController::class, 'show']); //->whereAlpha, ->whereNumeric, options to add constraints to wildcard

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store'])->middleware('auth');