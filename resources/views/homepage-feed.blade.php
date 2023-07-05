<x-layout>

    @section('styles')
        <link rel="stylesheet" href="css/countdown.css">
        <link rel="stylesheet" href="css/homepage.css">
    @endsection

    <div class="grid-container">
        <div class="content-container" id="left-container">
            <div class="new-event-form-container">
                <h2>Create New Event</h2>
                <form action="new-event" method="POST" id="new-event-form">
                @csrf
                    <div class="form-group">
                        <label for="next-date">Select Date and Time</label>
                        <input type="datetime-local" id="next-date" name="next-date" value="<?php echo date('Y-m-d'); ?>T17:00">
                    </div>
                    <div class="form-group">
                        <label for="opponent">Select Opponent</label>
                        <input type="text" id="opponent" name="opponent" placeholder="Enter username here">
                    </div>
                    <div class="form-group">
                        <label for="court">Select Court</label>
                        <select name="court" id="court">
                            <?php
                                for ($i = 1; $i <= 12; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                                }
                            ?>
                        </select>
                    </div>




                </form>
            </div>
        </div>
        <div class="content-container" id="center-container">
            @include('results')
        </div>
        <div class="content-container" id="right-container">
            <div class="loggedin-user-container">
                <h2>Hello <strong>{{auth()->user()->username}}</strong>!</h2>
            </div> 
        </div>
    </div>
</x-layout>