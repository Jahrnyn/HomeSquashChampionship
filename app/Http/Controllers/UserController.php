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
public function registration(Request $request) {
        $incomingFields = $request->validate([
            'username' => ['required', 'min:4', 'max:20', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        // Hashing psw
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);
        auth()->login($user); // auto login user after registration than redirect.
        return redirect('/')->with('success', 'Account has been created!');
    }

    // Log in
    public function login(Request $request) {
        $incomingFields = $request->validate([
            'username' => 'required',
            'loginpassword' => 'required'
        ]);

        if (auth()->attempt(['username' => $incomingFields['username'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'You have successfully logged in');
        } else {
            return redirect('/')->with('failure', 'Invalid login');
        }
    }

    // Log Out
    public function logout() {
        auth()->logout();
        return redirect('/')->with('success', 'You are succesfully logged out');
    }



    // Searching for registered users
    public function searchUsers(Request $request) {
        $query = $request->input('query');
        $users = User::where('username', 'like', '%' . $query . '%')->pluck('username');

        return response()->json($users);
    }
}
