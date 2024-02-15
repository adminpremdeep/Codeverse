<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve username and password from the form
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Replace these values with your actual user credentials validation logic
    $validUsername = 'demo_user';
    $validPassword = 'demo_pass';

    // Check if the provided credentials are valid
    if ($username === "Premdeep@test.com" && $password === "Prem@10") {
        // Authentication successful
        echo 'Login successful! Welcome, ' . $username;
    } else {
        // Authentication failed
        echo 'Invalid username or password. Please try again.';
    }
}
?>
