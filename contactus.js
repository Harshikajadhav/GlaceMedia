// Function to toggle between forms and change button colors
function showForm(formId) {
    const allForms = document.querySelectorAll('.contact-form');
    const allButtons = document.querySelectorAll('.tab-button');

    // Remove active class from all forms and buttons
    allForms.forEach((form) => form.classList.remove('active'));
    allButtons.forEach((button) => {
        button.classList.remove('active');
        button.style.backgroundColor = '#12a697 '; // Reset background color
        button.style.color = 'white'; // Reset text color
    });

    // Add active class to the selected form
    document.getElementById(formId).classList.add('active');

    // Change the button color of the selected tab
    const activeButton = document.querySelector(`.tab-button[onclick="showForm('${formId}')"]`);
    activeButton.classList.add('active');
    activeButton.style.backgroundColor = '#121212'; // Highlight active button
    activeButton.style.color = 'white'; // Change text color for better visibility
}

