<?php
// Include the Experience class
include('Experience.php');

// Database connection settings
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "portfolio";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch experience data from the database
$sql = "SELECT experience_title, company_name, start_date, end_date, experience_description, duties, companyImg FROM experience";
$result = $conn->query($sql);

$experiences = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Create an instance of the Experience class
        $experience = new Experience(
            $row['experience_title'],
            $row['company_name'],
            $row['start_date'],
            $row['end_date'],
            $row['experience_description'],
            $row['duties'],
            $row['companyImg']
        );
        $experiences[] = $experience;
    }
}

// Close the database connection
$conn->close();

// Return the array of experience objects
return $experiences;
?>
