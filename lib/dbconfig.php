<?php
try {
$pdo = new PDO('mysql:host=localhost;dbname=heintzetest', 'root', '');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
 }
// Datenbank schließen $pdo = null;
?>