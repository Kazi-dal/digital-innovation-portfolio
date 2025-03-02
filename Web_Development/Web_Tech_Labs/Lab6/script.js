// GENERAL STEPS
// Step 1. Write the CSS rule we want to apply in our CSS file
// Step 2. Define the function of what to do when the input is selected
// Step 3. For this script, we will be targetting the Input controls
// Step 4. Define which event (focus, blur) we want to listen to
// Step 5. Bind the event to the element we are targetting


// Create a function to add 'active' 
// class name to the selected input element
function activateInput(event) {
    event.target.classList.add('active');
  }



// Create a function to remove 'active'
// class name from the de-selected input element
function deactivateInput(event) {
    event.target.classList.remove('active');
  }



// Create some variables to store the HTML elements
// that we want to target, using the DOM,we should 
// have 4 variables in total, one for each user input
let firstNameInput = document.getElementById('firstName');
let lastNameInput = document.getElementById('lastName');
let emailInput = document.getElementById('email');
let passwordInput = document.getElementById('password');





// Bind the event (focus) to the element we are 
// targetting, by adding event listeners, we need to
// add 4 event listeners, one for each variable  
firstNameInput.addEventListener('focus', activateInput);
lastNameInput.addEventListener('focus', activateInput);
emailInput.addEventListener('focus', activateInput);
passwordInput.addEventListener('focus', activateInput);





// Bind the event (blur) to the element we are 
// targetting. i.e., remove the class name when 
// the user moves out of each of the input controls
firstNameInput.addEventListener('blur', deactivateInput);
lastNameInput.addEventListener('blur', deactivateInput);
emailInput.addEventListener('blur', deactivateInput);
passwordInput.addEventListener('blur', deactivateInput);



















