/* Create New Event */
/* const checkboxStatus = document.getElementById('more-opponent-check');
const additionalInputContainer = document.getElementById('additional-inputs-container');
const parentContainer = document.getElementById('new-event-form');

checkboxStatus.addEventListener('change', function () {
    if (this.checked) {
        for (let i = 3; i < 5; i++) {
            const formGroup = document.createElement("div");
            formGroup.className = "form-group";
            formGroup.id = `player${i}`;
            parentContainer.appendChild(formGroup);        
            
                const label = document.createElement("label");
                label.textContent = 'Aditional Opponent Name'
    
                const input = document.createElement('input');
                input.type = 'text';
                input.name = 'Aditional Opponent ' + i;
                input.placeholder = `Player ${i}`
    
                formGroup.appendChild(label);
                formGroup.appendChild(input);
    
                additionalInputContainer.appendChild(formGroup);            
        }
    } else {
        additionalInputContainer.innerHTML = '';
        console.log("test");
    }
}); */


//  handling the autocomplete functionality
$(document).ready(function () {                 // for DOM  is fully loaded
    $('#opponent').on('input', function () {    // event listener
        var query = $(this).val();              // retrieves the current value of the opponent input field (user input)

        if (query.length >= 3) {
            $.ajax({                            // actual GET request
                url: '/search-users',
                type: 'GET',
                data: { query: query },
                dataType: 'json',
                success: function (data) {                          // handles the JSON response received from the server (if AJAX request was successful)
                    var suggestions = data.map(function (user) {    // maps over the array
                        return '<option value="' + user + '">';     // creating option element
                    }).join('');                                    // join() method is used to join all the option elements together into a single string.

                    $('#opponent-suggestions').html(suggestions);   // updates the content of the datalist element
                },
                error: function (error) {                           // error handling
                    console.log('Error: ' + error.responseText);
                }
            });
        } else {
            $('#opponent-suggestions').html('');
        }
    });
});