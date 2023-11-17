<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenieLab</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div class="signup-form">
<?php


 //Get form data
 $staff_id = $_POST["staff_id"];
 $password = $_POST["password"];
 
 //including database connection
 include 'connection.php';
 
 //retrieve user from database

 $sql = "SELECT * FROM users WHERE staff_id = '$staff_id' AND password = '$password'";
 $result = $conn->query($sql);
 
 //verify staff ID and password
 if ($result->num_rows > 0){ 
   session_start();
 //Authentication successful, set session variables


 $_SESSION['staff_id'] = $staff_id;

 //redirect to page
 header("Location:dashboard.php");
 exit;
 } 
 else{
    echo '<h2 style="text-align:center;"> Access Denied!!! <br> Incorrect Password or Staff ID</h2>';
    echo '<a href="index.html" style="color:white;"> try again &#8635 </a>';
    exit;
 }
?>
</div>
</body>
</html>