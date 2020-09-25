<?php
require('./lib/dbconfig.php');

$statement =$pdo->prepare("SELECT Username FROM userverwaltung WHERE Username = ?");

$statement-> execute(array('ThomasFrank','Jacobi'));
while($row = $statement->fetch()){
    echo $row['Username'];
}

?>