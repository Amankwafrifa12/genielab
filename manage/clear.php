<?php 
session_start();
session_unset();
session_destroy();
if(isset($_SESSION['username'])){
    header("Location:dashboard.php");
}
else{ header("Location:index.html");}


?>