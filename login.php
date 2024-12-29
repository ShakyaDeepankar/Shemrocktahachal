<?php
// Simple login logic for demonstration purposes
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["login-username"];
    $password = $_POST["login-password"];

    // Your actual authentication logic goes here
    // For example, you might check the credentials against a database
    // For simplicity, this example assumes a hardcoded username and password
    $validUsername = "user";
    $validPassword = "pass";

    if ($username === $validUsername && $password === $validPassword) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>
