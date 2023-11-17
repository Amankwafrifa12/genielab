<?php
// Database configuration
$dbservername = 'localhost';
$dbusername = 'root';
$dbpassword = '';

// Connect to MySQL server
$conn = new mysqli($dbservername, $dbusername, $dbpassword);

// Check if connection is established
if ($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}

// Create database if it doesn't exist
$dbname = "manage";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if($conn->query($sql)=== FALSE){
    echo "Error creating database" .$conn->error;
}


// Connect to the database
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

// Check if connection is established
if ($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}


?>
