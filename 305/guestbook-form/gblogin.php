<?php
    // turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Start a session
    session_start();

    //If the user is already logged in
    if(isset($_SESSION['username'])) {
        // Redirect to admin page
        header('location: guestbook.php');
    }
    // if the login form has been submitted
    if(isset($_POST['submit'])) {

        // include gbcreds.php
        include 'gbcreds.php';

        // Get the username and password from the POST array
        $username = $_POST['username'];
        $password = $_POST['password'];

        // If the username and password are correct
        if(array_key_exists($username, $login) && $login["$username"] == $password) {

            // Store login name in a session variable
            $_SESSION['username'] = $username;

            // Redirect to admin page
            header("location: guestbook.php");
        } else {

            // Login credentials are incorrect
            echo "<p> Wrong Credentials</p>";
        }
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/gbFavicon1.png">
    <title>Login Page</title>
</head>
<body>
<form method="post" action="#">
    <label>Username:
        <input type="text" name="username">
    </label><br>

    <label>Password:
        <input type="password" name="password">
    </label><br>

    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

