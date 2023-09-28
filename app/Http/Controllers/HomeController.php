<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __invoke()
    {
        if (Auth::check()) {
            return redirect()->route('homepage');
        }

        return redirect()->route('login');
    }

    public function homepage()
    {
        return view('homepage');
    }
}
