<?php
// Retrieve the data from the AJAX request
session_start();
$specificValue = $_SESSION['user_name1'];
$dataToInsert = $_POST['dataToInsert'];

// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brain_bits_db";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the data into the database
$sql = "INSERT INTO new_user (user_score) VALUES ('$dataToInsert') WHERE user_id = $specificValue";

if ($conn->query($sql) === TRUE) {
    echo "Data stored successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
