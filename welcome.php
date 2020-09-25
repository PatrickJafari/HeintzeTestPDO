<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Willkommen!</title>
  </head>
  <body>
  
    <?php
    include('./inc/session_time.php');
    if(isset($_SESSION['loggedin']) == true)
    {    
        echo "Hallo ";
        echo $_SESSION['username'];
    } else {
        header('Location: index.php');
    }

    ?>

    <a href="logout.php">logout</a>
  </body>
</html>


