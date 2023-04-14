<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }

    public function store()
    {
        //validate request
        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'

        ]);

        //attempt to auth and log in user
        if (! auth()->attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back!');
    }

    public function create()
    {
        return view('sessions.create');
    }
}
