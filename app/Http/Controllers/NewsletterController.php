<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email' => ['required', 'email']]);

        try {
            $newsletter->subscribe(request('email'));
        } catch (Exception $e) {
            ValidationException::withMessages([
                'email' => 'This email could not been added to our newsletter!'
            ]);
        }

        return redirect('/')->with('toast', 'Thanks for signing up to our newsletter!');
    }
}
