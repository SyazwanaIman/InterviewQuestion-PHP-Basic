// Attach event listener to submit button
document.getElementById('submitBtn').addEventListener('click', function (e) {
    e.preventDefault(); 

    // Get the username from the input field
    let username = document.getElementById('username').value.trim();

    // Get the message element for showing feedback
    let message = document.getElementById('message');

    // Check if the username field is empty
    if (!username) {
        message.textContent = 'Error: Username cannot be empty!';
        message.className = 'message error';
        return; // Stop the function here
    }

    // AJAX request to send username to info.php
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'info.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Update the message element based on server response
                if (xhr.responseText === 'Verified') {
                    message.textContent = 'Verified';
                    message.className = 'message success';
                } else {
                    message.textContent = 'Error';
                    message.className = 'message error';
                }
            }
        }
    };

    // Send the username data to the server
    xhr.send('username=' + encodeURIComponent(username));
});
