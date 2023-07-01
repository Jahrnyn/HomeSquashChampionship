<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Squash Results</title>
  <link rel="stylesheet" href="/main.css">
</head>

<body>
    <div class="main-content-container">
        {{-- Header --}}
        <div class="header-container">
        <header class="header">
            <div class="logo">
                <a href="/" >
                    <img src="squash-logo2-cutted_resized.png" alt="Home">
                    <h1> Squash Results</h1>
                </a> 
            </div>

        @auth
                {{-- Logged in Header --}}
                <div class="user-profile">
                    <a href="/profile" class="username"><strong>{{auth()->user()->username}}</strong></a>
                    <span class="profile-picture"></span>
                    <div class="button-container">
                        <a class="button-link" href="/create-month">New Month</a>
                        <a class="button-link" href="/create-match">New Match</a>
                        <form action="/logout" method="POST" class="logout-form">
                        @csrf
                        <button type="submit" class="logout-button">Log out</button>
                        </form>
                    </div>
                </div>
            </header>
            </div>

            {{-- Countdown --}}
            <div class="countdown-container">
                <div class="header-background">
                    <img src="/squash.gif" alt="" class="background-gif">
                </div>
                <div class="bg-filter"></div>
                <div class="countdown">
                    <h2><p id="demo"></p></h2>
                </div>
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

        {{-- There goes the unice content linked to the rout --}}
        {{$slot}}

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
    </div> 

    {{-- footer --}}
    <div class="footer-container">
        <footer>
            <p>&copy; {{date('Y')}} Squash Results. All rights reserved.</p>
        </footer>
    </div>


    <script src="/main.js"></script>