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
    <header class="header">
        <div class="logo">
            <h1><a href="/">Squash Results</a></h1>
        </div>

@auth
        <div class="user-profile">
            <span class="username">John Doe</span>
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
@else
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
@endauth
    
    {{-- Countdown --}}
    <section class="countdown">
        <h2>
            <p id="demo"></p>
        </h2>
    </section>

    {{-- There goes the unice content linked to the rout --}}
    {{$slot}}

    {{-- footer --}}
    <footer>
        <p>&copy; 2023 Squash Results. All rights reserved.</p>
    </footer>