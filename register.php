<?php
    require("lib/dbconfig.php");

    $stmt = $pdo->prepare("SELECT Username FROM userverwaltung WHERE Username = ?");
    $stmt->execute('Patrick');
    $arr = $stmt->fetch(PDO::FETCH_COLUMN);
    if(!$arr) exit('No rows');
    var_export($arr);
    $stmt = null;
    ?>