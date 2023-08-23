<x-layout>

    @section('styles')
        <link rel="stylesheet" href="css/countdown.css">
        <link rel="stylesheet" href="css/homepage.css">
        <link rel="stylesheet" href="css/create-new-event-form.css">
    @endsection

    <div class="grid-container">
        <div class="content-container" id="left-container">
            @include('components/create-new-event-form')
        </div>
        <div class="content-container" id="center-container">
            @include('components/events_container', ['events' => $userEvents])
        </div>
        <div class="content-container" id="right-container">
            <div class="loggedin-user-container">
                <h2>Hello <strong>{{auth()->user()->username}}</strong>!</h2>
            </div> 
        </div>
    </div>
</x-layout>