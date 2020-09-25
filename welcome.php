<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Willkommen!</title>
    <link rel="stylesheet" href="./src/style.css">
    <script src="./src/jquery-3.5.1.min.js"></script>
  </head>
  <body>
    <div id="welcome">
        <div class="body">
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
        </div>
        <a href="logout.php">logout</a>
    </div>

    
  </body>
</html>


