<div class="new-event-form-container">
    <h2>Create New Event</h2>
    <form action="/create-event" method="POST" id="new-event-form">
    @csrf
        <div class="form-group">
            <label for="next-date">Select Date and Time</label>
            <input type="datetime-local" id="next-date" name="next-date" value="<?php echo date('Y-m-d'); ?>T17:00">
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
            <label for="player2">Select Opponent</label>
            <input type="text" id="player2" name="player2" placeholder="Enter username here">
        </div>
        <div class="form-group">
            <label for="more-opponent-check">More participants?</label>
            <input type="checkbox" id="more-opponent-check" name="more-opponent-check">
        </div>
        <div id="additional-inputs-container"></div>
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