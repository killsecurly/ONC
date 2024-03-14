<?php
// NON FUNCTIONAL
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pin = $_POST["pin"];

    // Hash the PIN
    $hashedPin = password_hash($pin, PASSWORD_DEFAULT);

    // Query the database
    // (Assuming you have a 'users' table with columns 'username' and 'hashed_pin')
    // Replace with your actual database connection and query
    $db = new PDO("sqlite:login.db");
    $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user && password_verify($pin, $user["hashed_pin"])) {
        // // Valid credentials,  access
        echo "Welcome, $username!";
    } else {
        // Invalid credentials
        echo "Invalid username or PIN.";
    }
}