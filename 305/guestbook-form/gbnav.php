<?php

//If user is logged in, get username
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

//Display a welcome message
echo "<p> Hello, $username</p>";

//Display a logout link
echo "<a href='gblogout.php'>Logout</a>"


?>
<div class="card">
    <h5>Welcome</h5>
    <img src="images/gb_img.jpg">
</div>

<div>
    <a href="http://mkariuki.greenriverdev.com/305/guestbook-form/guestbook.html">Guest Book</a> |
    <a href="http://mkariuki.greenriverdev.com/305/guestbook-form/guestbook.php">Admin Page</a>
</div>