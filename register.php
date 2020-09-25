<?php
    require("lib/dbconfig.php");
    $fehler = "";
    //$stmt = $pdo->prepare("SELECT Username FROM userverwaltung WHERE Username = ?");
    /*$user = 'Patrick';
    $stmt = $pdo->prepare('SELECT Username FROM userverwaltung WHERE Username = ?');
    $stmt->execute([$user]);
    $user = $stmt->fetch();
    print $user[0];*/

    if(isset($_POST['username'])) 
    {
        if( !empty($_POST['username'] && $_POST['password'])  ) 
        {
        $username_db = "";
        $password_db = "";       
        $username = $_POST['username'];
        $password = $_POST['password'];

        /*$sql = "SELECT Username, Passwort FROM userverwaltung WHERE Username = :user AND Passwort = :pass";
		$query = $pdo->prepare($sql);
		$query->bindValue(':user',$_POST['username']);
		$query->bindValue(':pass',$_POST['password']);
		$query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);*/
        
        $stmt = $pdo->prepare("SELECT Username FROM userverwaltung WHERE Username = ?");
        $stmt->execute([$username]);
        $arr = $stmt->fetch(PDO::FETCH_COLUMN);
        if(!$arr) exit('No rows');
       
        echo $arr;

        $stmt = $pdo->prepare("SELECT Username FROM userverwaltung WHERE Username = ?");
        $stmt->execute([$username]);
        $arr = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$arr) exit('No rows');
       echo "<br>";
        print_r($arr);
       
        $pdo = null;

        } else {
            echo "Username Empty";
        }
    }
?>