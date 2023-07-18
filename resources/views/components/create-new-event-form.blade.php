<div class="new-event-form-container">
    <h2>Create New Event</h2>
    <form action="/create-event" method="POST" id="new-event-form">
    @csrf
        <div class="form-group">
            <label for="next-date">Select next Date</label>
            <input type="date" id="next-date" name="next-date" value="<?php echo date('Y-m-d'); ?>">
        </div>
        <div class="form-group">
            <label for="next-time">Select Time</label>
            <input type="time" id="next-time" name="next-time" value="<?php echo date('H:i'); ?>">
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
        <div class="form-group">
            <label for="opponent">Select Opponent</label>
            <input type="opponent" id="opponent" name="opponent" placeholder="Enter username here">
        </div>
{{--        <div class="form-group">
            <label for="#">More participants?</label>
            <input type="checkbox" id="more-opponent-check" name="more-opponent-check">
        </div>
        <div id="additional-inputs-container"></div> --}}
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" id="location" name="location" placeholder="Enter location here">
        </div>
        <div class="forom-group">
            <button type="submit" class="button-link" id="create-button">Create</button>
        </div>

    </form>
</div>
<script src="js/create-new-event-form.js"></script>