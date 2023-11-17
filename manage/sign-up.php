<?php 
session_start(); if (isset($_SESSION['username'])){
    $user = $_SESSION['username']; header("Location:dashboard.php"); exit;}  
    ?>
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
        <div class="logo"><img src="img/logo.jpg" alt="">
             <h1>Sign Up</h1></div>
        <form action="signup.php" method="POST">
            <input type="text" class="staff" name="staff_id" id="staff" placeholder="Staff ID" required>
            <input type="text" class="username" name="username" id="name" placeholder="Username" required>
            <input type="email" class="email" name="email" id="email" placeholder="Email" required>            
            <input type="password" id="password" name="password" class="password" placeholder="Password" required>
            <button>Sign Up</button>
        </form>
    </div>
</body>
</html>