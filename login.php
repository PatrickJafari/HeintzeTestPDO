<?php
require('./lib/dbconfig.php');

$statement =$pdo->prepare("SELECT Username FROM userverwaltung WHERE Username = ?");

$statement->execute(array('ThomasFrank'));
while($row = $statement->fetch(PDO::FETCH_ASSOC)){
    echo $row["Username"];
}

?>