<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Squash Results</title>
  <link rel="stylesheet" href="/main.css">
</head>

<body>
    <div class="page-container">

        {{-- Header --}}
        <div>
            @include('components/header')
        </div>

        {{-- There goes the unice content linked to the rout --}}
        <main>
            {{$slot}}
        </main>

        {{-- footer --}}
        <div>
            @include('components/footer')
        </div>
                
        {{-- Toast Notification for redirect --}}
        @include('components/toast')
        
    </div> 
    <script src="/main.js"></script>
</body>
</html>