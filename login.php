<?php
//inclusion of the database connect
require('./lib/dbconfig.php');
//Starting the Seesion
session_start();

//Get username and password from the login formula
$username = $_POST['username'];
$password = $_POST['password'];

    if(!empty($_POST['username'] && $_POST['password'])){

        //checking for typed username and password in the database 
        $statement = $pdo->prepare("SELECT Username, Passwort FROM userverwaltung WHERE Username = ? AND Passwort = md5(?)");
        $statement-> execute(array($username, $password));
        $row = $statement->fetch();

        //Check if username is in the resultset
        if ($username == $row['Username']) {
            //Check if password in md5 is in the resultset
            if (md5($password) == $row['Passwort']) {

                //Set Session Parameters
                $_SESSION['time_start_login'] = time();
                $_SESSION['username'] = $row['Username'];
                $_SESSION['loggedin'] = true;

                //Load the Welcome Page
                header('Location: welcome.php');
            }
        }
    }
//Ending Database Connection
$pdo = null;

?>