<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{

    // Homepage
    public function showCorrectHomepage() {
        if (auth()->check()) {
            return view('homepage-feed');
        } else {
            return view('homepage');
        };
    }
    
    // Registration
    public function register(Request $request) {
        $incomingFields = $request->validate([
            'username' => ['required', 'min:4', 'max:20', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        // Hashing psw
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        User::create($incomingFields);
        return 'Hello from register function';
    }

    // Log in
    public function login(Request $request) {
        $incomingFields = $request->validate([
            'loginemail' => 'required',
            'loginpassword' => 'required'
        ]);

        if (auth()->attempt(['email' => $incomingFields['loginemail'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'You have successfully logged in');
        } else {
            return "Fail";
        }
    }

    // Log Out
    public function logout() {
        auth()->logout();
        return redirect('/')->with('success', 'You are succesfully logged out');
    }
}
