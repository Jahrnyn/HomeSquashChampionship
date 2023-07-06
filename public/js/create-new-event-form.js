/* Create New Event */
const checkoxStatus = document.getElementById('more-opponent-check');
const additionalInputContainer = document.getElementById('additional-inputs-container');
const parentContainer = document.getElementById('new-event-form');

checkoxStatus.addEventListener('change', function () {
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
                input.name = 'Aditional Opponent ${i}';
                input.placeholder = `Player ${i}`
    
                formGroup.appendChild(label);
                formGroup.appendChild(input);
    
                additionalInputContainer.appendChild(formGroup);            
        }
    } else {
        additionalInputContainer.innerHTML = '';
        console.log("test");
    }
});