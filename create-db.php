<?php
// NON FUNCTIONAL
// Connect to the SQLite database
$db = new PDO('sqlite:login.db');

// Create a table (if it doesn't exist)
$query = "CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY,
    username TEXT NOT NULL,
    email TEXT NOT NULL
)";
$db->exec($query);

// Insert sample data
$username = 'John';
$email = 'john@example.com';
$query = "INSERT INTO users (username, email) VALUES (:username, :email)";
$stmt = $db->prepare($query);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':email', $email);
$stmt->execute();

echo "Data inserted successfully!";
?>
