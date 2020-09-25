<?php
    require("lib/dbconfig.php");
    $fehler = "";
    //$stmt = $pdo->prepare("SELECT Username FROM userverwaltung WHERE Username = ?");
    /*$user = 'Patrick';
    $stmt = $pdo->prepare('SELECT Username FROM userverwaltung WHERE Username = ?');
    $stmt->execute([$user]);
    $user = $stmt->fetch();
    print $user[0];*/

    if(isset($_POST['username']) && isset($_POST['username'])) 
    {
        if( !empty($_POST['username'] && $_POST['password'])  ) 
        {
  
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username_db = "";
        $password_db = "";   
            
        $statement = $pdo->prepare("SELECT Username FROM userverwaltung WHERE Username = ?");
            
        $statement->execute(array($username));
        while($row = $statement->fetch()){
            $username_db = $row['Username'];
         }

         // Checking if Username exists
         if ($username == $username_db) 
         {
            header('Location: index.php');
         }

         // Register User if not Exists
         if($username != $username_db) 
         {
            $sql = "INSERT INTO userverwaltung (Username, Passwort) VALUES (?,md5(?))";
            try { 
                $pdo->prepare($sql)->execute([$username, $password]);
            } catch (Exception $ex) {
                echo $ex;
            }
         }
         
        // Close Database Connection
        $pdo = null;

        } else {
            echo "Username or Password empty";
        }
    }
?>