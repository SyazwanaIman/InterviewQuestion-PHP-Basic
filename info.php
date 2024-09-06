<?php
// Ensure the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the username sent
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';

    // Check if the username is 'abc'
    if ($username === 'abc') {
        echo 'Verified';
    } else {
        echo 'Error';
    }
}
?>
