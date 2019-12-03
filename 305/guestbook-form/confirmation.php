
<?php
/** 305/guestbook
 *  Nov 26, 2019
 */
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

 $jobTitle = $_POST['jobTitle'];
 $companyName = $_POST['companyName'];
 $comment = $_POST['comment'];
 $format = $_POST['format'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guest Book</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/gbFavicon1.png">
</head>
<body>
    <h1>Thank you for signing our guest book</h1>
    <h2>Guest Signatures</h2>
    <br>

    <?php

    //var_dump($_POST);

    require ('/home/mkariuki/connect.php');
    $isValid = true;

    //Validating first name
    if (!empty($_POST['firstName'])) {
        $first = $_POST['firstName'];
    } else {
        echo '<p>Please enter first name.</p>';
        $isValid = false;
    }

    //Validating last name
    if (!empty($_POST['lastName'])) {
        $last = $_POST['lastName'];
    } else {
        echo '<p>Please enter last name.</p>';
        $isValid = false;
    }

    //Validating email address
    if (!empty($_POST['emailAdd'])) {
        $email = $_POST['emailAdd'];
        /*if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }*/

        if (!stristr($email,"@") OR !stristr($email,".")) {
            echo '<p>Please enter a valid email address.</p>';

    }
    } else {
        echo '<p>Please enter an email address.</p>';
        $isValid = false;
    }

    //Validating if to be added to mailing list
    if(!empty($_POST['add'])) {
        $add = $_POST['add'];
        if($_POST['add'] == ['yes']){
            if(empty($_POST['add'])) {
                echo "<p>Please enter an email address</p>";
            }else {
                $email = ($_POST['emailAdd']);
                if (!stristr($email,"@") OR !stristr($email,".")) {
                    echo "<p>Please enter a valid email address</p>";
                }
            }
        }else {
            $isValid = true;
        }
    }
    //Validating LinkedIn
    if (!empty($_POST['linkedIn'])) {
        $linkedIn = $_POST['linkedIn'];
        /*$format = parse_url($linkedIn);*/
        if (filter_var($linkedIn, FILTER_VALIDATE_URL) === false) {
            echo "Invalid url";
            $isValid =false;
        }
    }else {
        echo '<p>Please enter a LinkedIn Url.</p>';
        $isValid = false;
    }

    //Validating how wr met
    if ($_POST['met'] != "other" && $_POST['met'] != "none") {
        $met = $_POST['met'];
    }
    else if (!empty($_POST['met']) && $_POST['met'] == "other") {
        $met = $_POST['other-block'];

    }
    else if (!empty($_POST['met']) && $_POST['met'] == "none") {
        echo '<p>Please enter how we met.</p>';

        $isValid = false;
    }

    if ($isValid) {

        $timestamp = date('Y-m-d');

        $sql = "INSERT INTO guestbook (firstName, lastName, jobTitle, companyName, linkedIn, email, emailAdd, comment, format, met, timeFilled)
                VALUES ('$first', '$last', '$jobTitle', '$companyName', '$linkedIn', '$email', '$add', '$comment', '$format', '$met', '$timestamp')";

        //echo $sql;

        $result = mysqli_query($cnxn, $sql);

        if ($result) {
            echo "<p>Name: $first $last</p>";
            echo "<p>Job Title: $jobTitle</p>";
            echo "<p>Company: $companyName</p>";
            echo "<p>LinkedIn: $linkedIn</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Added to Email List: $add</p>";
            echo "<p>Comment: $comment</p>";
            echo "<p>How we met: $met</p>";
        }
    }


    ?>

    <a href="gblogin.php">View guest summary</a>
</body>
</html>
