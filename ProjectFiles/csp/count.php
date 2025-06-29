<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to count the number of registered users in the 'users' table
$sql = "SELECT COUNT(*) as total FROM users"; // Replace 'users' with your actual table name
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    echo htmlspecialchars($row['total']); // Use htmlspecialchars to prevent XSS
} else {
    echo "Error: " . $conn->error; // Display error message
}

$conn->close();
?>
