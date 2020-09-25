<?php
session_start();

if((time() - $_SESSION['time_start_login']) > 10){
    header("location: ./logout.php");
} 

?>