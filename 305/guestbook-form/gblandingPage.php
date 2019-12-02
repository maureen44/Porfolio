<?php
session_start();
//Start a session


//If user is not logged in, reroute them to the login page
include "gbnav.php";


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styles/guestbook.css">


    <title>Guest Book</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/gbFavicon1.png">


</head>
<body>



<div class="container center">
    <div class="col-lg">
        <h1>Welcome</h1>
        <img src="images/gbFavicon.png" content="background">

        <h1><a href="http://mkariuki.greenriverdev.com/305/guestbook-form/guestbook.html">Guest Book</a></h1>
        <h1><a href="http://mkariuki.greenriverdev.com/305/guestbook-form/guestbook.php">Admin Page</a></h1>
    </div>
</div>

</body>
</html>