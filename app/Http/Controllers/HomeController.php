<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Homepage
    public function showCorrectHomepage() {
        if (auth()->check()) {
            // Fetching user events
            $eventController = new EventController();
            $userEvents = $eventController->fetchUserEvents();

            return view('homepage-feed', ['userEvents' => $userEvents]);
        } else {
            return view('homepage');
        };
    }

    // Loading registration page
    public function registerpage() {
        return view('registration');
    }
}
