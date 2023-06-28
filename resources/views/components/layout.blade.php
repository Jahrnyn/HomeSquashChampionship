<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squash Results</title>
    <link rel="stylesheet" href="/main.css">
</head>

<body>
    {{-- Header --}}
    <div class="header-container">
    <header class="header">
        <div class="logo">
            <h1><a href="/">Squash Results</a></h1>
        </div>
            
@auth
        {{-- Logged in Header --}}
        <div class="user-profile">
            <a href="/profile" class="username"><strong>{{auth()->user()->username}}</strong></a>
            <span class="profile-picture"></span>
            <div class="button-container">
            <button class="button-link">New Month</button>
            <button class="button-link">New Match</button>
            <form action="/logout" method="POST" class="logout-form">
                @csrf
                <button type="submit" class="logout-button">Log out</button>
            </form>
            </div>
        </div>
        </header>
        </div>
@else
        {{-- Logged out Header --}}
        <div class="login-form">
            <form action="/login" method="POST">
                @csrf
                <input type="email" name="loginemail" placeholder="Email Address">
                <input type="password" name="loginpassword" placeholder="Password">
                <button class="button-link" type="submit">Login</button>
            </form>
            <div class="register-link">
                <form action="/register">
                    <button class="button-link" type="submit">Register</button>
                </form>
            </div>
        </div>
    </header>
    </div>
@endauth
    
    {{-- Countdown --}}
    <section class="countdown">
        <h2>
            <p id="demo"></p>
        </h2>
    </section>

    {{-- Toast Notification for redirect --}}
    @if (session()->has('success'))
        <div class="toast-container">
            <div class="toast">
                <span class="toast-icon">&#x2714;</span>
                <span class="toast-message">{{session('success')}}</span>
                <button class="toast-close">&times;</button>
              </div>
        </div>
    @endif
    @if (session()->has('failure'))
        <div class="toast-container">
            <div class="toast">
                <span class="toast-icon">&#x2639;</span>
                <span class="toast-message">{{session('failure')}}</span>
                <button class="toast-close">&times;</button>
            </div>
        </div>
    @endif

    {{-- There goes the unice content linked to the rout --}}
    {{$slot}}

    {{-- footer --}}
    <footer>
        <p>&copy; 2023 Squash Results. All rights reserved.</p>
    </footer>
    <script src="/main.js"></script>