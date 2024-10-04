<?php
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

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form field values
    $experience_title = $_POST['experience_title'];
    $company_name = $_POST['company_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $experience_description = $_POST['experience_description'];
    $duties = $_POST['duties'];
    $companyImg = $_POST['companyImg'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO experience (experience_title, company_name, start_date, end_date, experience_description, duties, companyImg) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $experience_title, $company_name, $start_date, $end_date, $experience_description, $duties, $companyImg);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>