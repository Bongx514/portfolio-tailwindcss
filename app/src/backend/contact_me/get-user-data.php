<?php
include('user.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userData = [];

$sql = "SELECT name, email, message, created_at FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $user = new User($row['name'], $row['email'], $row['message'], $row['created_at']);
        $userData[] = $user;
    }
} else {
    $userData = []; // Return an empty array if no data is found
}

$conn->close();
return $userData;
?>
