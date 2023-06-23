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
      {{-- Registration --}}
      <div class="registration-container">
         <h2>Registration</h2>
         <form>
            <div class="form-group">
               <label for="username">Username:</label>
               <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
               <label for="email">Email:</label>
               <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
               <label for="password">Password:</label>
               <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
               <label for="confirm-password">Confirm Password:</label>
               <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit">Register</button>
         </form>
      </div>
      <script src="/main.js"></script>
   </body>
</html>
