<?php
session_start();
include('./lib/dbconfig.php');
if(isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
    $timestamp = 0;
    $statement = $pdo->prepare("SELECT Username, login_timestamp FROM userverwaltung WHERE Username = ?");
                
    $statement->execute(array($username));
    while($row = $statement->fetch()){
        $login_timestamp = $row['login_timestamp'];
    }
    echo time();
    echo "<br>";
    echo $login_timestamp;
} 

if((time() - $login_timestamp) > 10){
    header("location: ./logout.php");
} 

?>