<x-layout>
    <div class="container">
        <div class="left-container">
            <div class="loggedin-user-container">
                <h2>Hello <strong>{{auth()->user()->username}}</strong>!</h2>
            </div> 
        </div>
        <div class="results-container">
            @include('results')
        </div>
        <div class="right-container">
            <p>some content will go here.</p>
        </div>
    </div>
</body>
</html>
</x-layout>