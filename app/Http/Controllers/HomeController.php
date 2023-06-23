<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Loading homepage
    public function homepage() {
        return view('homepage');
    }

    // Loading registration page
    public function registerpage() {
        return view('register');
    }
}
