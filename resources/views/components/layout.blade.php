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
        <div class="login-form">
            <form>
                <input type="email" name="email" placeholder="Email Address">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
            <div class="register-link">
                <form action="/register">
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </header>
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
