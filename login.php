<?php

require('./lib/dbconfig.php');

session_start();


$username = $_POST['username'];
$password = $_POST['password'];

    if(!empty($_POST['username'] && $_POST['password'])){

        
        $statement = $pdo->prepare("SELECT Username, Passwort FROM userverwaltung WHERE Username = ? AND Passwort = md5(?)");
        $statement-> execute(array($username, $password));
        $row = $statement->fetch();

        
        if ($username == $row['Username']) {
            
            if (md5($password) == $row['Passwort']) {

                
                $_SESSION['time_start_login'] = time();
                $_SESSION['username'] = $row['Username'];
                $_SESSION['loggedin'] = true;

                
                header('Location: welcome.php');
            }
        }
    }

$pdo = null;

?>