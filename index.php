<html lang="de">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        <script src="jquery/jquery-3.5.1.min.js"></script>
        <script>
        $(document).ready(function() {
            $("#loginForm").show();
            $("#registerForm").hide();

            $( "#register" ).click(function() {
                $("#loginForm").hide();
                $("#registerForm").fadeIn(500);
            });

            $( "#login" ).click(function() {
                $("#registerForm").hide();
                $("#loginForm").fadeIn(500);
               
            });
        });
        </script>
    </head>

    <body>
 
    <div id="register">Register</div>
    <div id="login">Login</div>

    <div id="loginForm">
        <form action="login.php" method="get">
            <h1>Login</h1>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" value=""><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" value=""><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div id="registerForm">
        <form action="register.php" method="get">
        <h1>Register</h1>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" value=""><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" value=""><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    </body>
</html>