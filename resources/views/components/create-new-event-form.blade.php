<div class="new-event-form-container">
    <h2>Create New Event</h2>
    <form action="/create-event" method="POST" id="new-event-form">
    @csrf
        <div class="form-group">
            <label for="datetime">Select Date and Time</label>
            <input type="datetime-local" id="datetime" name="datetime" value="<?php echo date('Y-m-d\TH:i'); ?>">
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
            <input type="opponent" id="opponent" name="opponent" placeholder="Enter username here" list="opponent-suggestions">
            <datalist id="opponent-suggestions"></datalist>
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