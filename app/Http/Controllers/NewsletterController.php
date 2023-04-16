<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Exception;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function __invoke(Newsletter $newsletter): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        request()->validate([
            'email' => 'required|email'
        ]);

        try{
            $newsletter->subscribe(request('email'));
        } catch (Exception $exception)
        {
            throw ValidationException::withMessages([
                'email' => 'This email could not be added to our newsletter list'
            ]);
        }

        return redirect('/')->with('success', 'You are now signed up to our newsletter');
    }
}
