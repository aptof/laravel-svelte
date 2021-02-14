<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    public function greet()
    {
        return Inertia::render('Welcome/Greet', [
            'message' => 'Welcome',
            'technology' => 'Technology in use: Laravel, Svelte, Inertiajs'
        ]);
    }
}
