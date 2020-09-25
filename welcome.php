<?php
session_start();
if(isset($_SESSION['loggedin']) == true)
{
    echo "Hallo ";
    echo $_SESSION['username'];
} else {
    header('Location: index.php');
}

?>

<a href="logout.php">logout</a>
