<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Verification</title>
    <style>
        /* Basic styling for the form */
        .form {
            border: 1px solid #000;
            padding: 20px;
            width: 250px;
            margin: 100px auto;
            text-align: center;
            font-family: arial;
        }

        /* Label and input field styling */
        label, input[type="text"] {
            display: block;
            font-size: 20px;
            width: 100%;
            margin-bottom: 10px;
            text-align: left;
        }

        /* Submit button styling */
        input[type="submit"] {
            background-color: green;
            color: white;
            padding: 10px;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        /* Message styling */
        .message {
            font-size: 16px;
            margin-top: 10px;
        }

        /* Success message */
        .message.success {
            color: green;
        }

        /* Error message */
        .message.error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="form">
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username" placeholder="Enter username">

        <!-- Submit button -->
        <input type="submit" id="submitBtn" value="Submit">

        <!-- Display the message here -->
        <p class="message" id="message"></p>
    </div>

    <!-- javascript here -->
    <script src="verify_ajax.js"></script>
</body>
</html>
