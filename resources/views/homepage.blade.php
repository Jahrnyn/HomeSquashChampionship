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
            <h1>Squash Results</h1>
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
        <h2>Coundown will be here</h2>
    </section>

    {{-- the results --}}
    <section class="results-container">
    <div class="results">
    <article>
        <h2><a href="/monthlyResults/jun2023">Június</a></h2>
        <div class="month-content">
        Állás = <b>FLINKI</b> = 3,5-1,5 <br>
        <br>
        <p>
            06.02. Péntek 17:00 3-as EGÁL 5-5 <br>
            06.05. Hétfő 17:00 3-as FLINKI 6-4 <br>
            06.07. Szerda 16:00 3-as EGÁL 4-4 <br>
            06.14. Szerda 18:00 1-es FLINKI 6-3<br>
            06.19. Hetfő 17:00 3-as FLINKI 6-3 <br>
            06.22. Csütörtök 17:00 3-as ZOLI 6-4 <br>
            06.26. Hétfő 17:00 1-es 
        </p>
        </div>
    </article>
    <article>
        <h2><a href="/monthlyResults/may2023">Május</a></h2>
        <div class="month-content">
        <p>
            Eredmény = <b>DÖNTETLEN</b> = 1,5-1,5 <br>
        </p>
        </div>
    </article>
    <article>
        <h2><a href="/monthlyResults/apr2023">Április</a></h2>
        <div class="month-content">
        <p>
            Eredmény = <b>FLINKI</b> = 3,5-2,5 <br>
        </p>
        </div>
    </article>
    <article>
        <h2><a href="/monthlyResults/mar2023">Március</a></h2>
        <div class="month-content">
        <p>
            Eredmény = <b>FLINKI</b> = 4-2 <br>
        </p>
        </div>
    </article>
    <article>
        <h2><a href="/monthlyResults/feb2023">Február</a></h2>
        <div class="month-content">
        <p>
            Eredmény = <b>DÖNTETLEN</b> = 4-4 <br>
        </p>
        </div>
    </article>
    <article>
        <h2><a href="/monthlyResults/jan2023">Január</a></h2>
        <div class="month-content">
        <p>
            Eredmény = <b>FLINKI</b> = 7,5-3,5 <br>
        </p>
        </div>
    </article>
    </div>
    </section>

    <script src="/main.js"></script>
</body>
</html>
