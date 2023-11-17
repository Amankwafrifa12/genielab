<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenieLab</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="signup-form">
<?php

 //Get form data
$username = $_POST["username"];
$staff_id = $_POST["staff_id"];
$email = $_POST["email"];
$password = $_POST["password"];

//including database connection
include 'connection.php';


// Create users table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, staff_id VARCHAR(30) NOT NULL, username VARCHAR(30) NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(50) NOT NULL)";
    if($conn->query($sql)=== FALSE){
        echo "Error creating table:" .$conn->error;
    }

//Check if email does not already exist
$sql = "SELECT * FROM users WHERE staff_id = '$staff_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    header("Location:index.html");
}
else{
   // Insert user data into users table
   $sql = "INSERT INTO users (staff_id, username, email, password) VALUES ('$staff_id', '$username', '$email', '$password')";
if ($conn->query($sql) === TRUE){

    session_start();
    //Authentication successful, set session variables
   
    $_SESSION['staff_id'] = $staff_id;
 header("Location:dashboard.php");
}
}

?>
</div>
</body>
</html>