<?php
require('./lib/dbconfig.php');

$username = $_POST['username'];
$password = $_POST['password'];

$statement = $pdo->prepare("SELECT Username, Passwort FROM userverwaltung WHERE Username = ? AND Passwort = ?");

$statement-> execute(array($username, $password));
while($row = $statement->fetch()){
    echo $row['Username'];
    echo $row['Passwort'];
}

?>