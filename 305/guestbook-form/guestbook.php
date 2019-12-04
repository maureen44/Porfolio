<?php
/** 305/guestbook.php
 *  Nov 26, 2019
 */
session_start();
//Start a session

if (!isset($_SESSION['username'])){
    header('location: gblogin.php');
}
//If user is not logged in, reroute them to the login page
include "nav.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/gbFavicon1.png">

</head>
<body>
<div class="container">
    <h3>Guest Summary</h3>

    <?php
    include "gbnav.php";
    require('/home/mkariuki/connect.php');

    //Define the query


    $sql = 'SELECT firstName, lastName, jobTitle, companyName, linkedIn, email, emailAdd, comment, format, met, timeFilled
            FROM guestbook';

    //Send the query to the database
    $result = mysqli_query($cnxn, $sql);
    //var_dump($result);
    ?>

    <table id="guestbook-table" class="display">
        <thead>
        <tr>

            <th>Guest Name</th>
            <th>Job Title</th>
            <th>Company Name</th>
            <th>LinkedIn</th>
            <th>Email</th>
            <th>Added to Email list</th>
            <th>Comment</th>
            <th>Email format</th>
            <th>How we met</th>
            <th>Time filled</th>
        </tr>
        </thead>
        <tbody>

        <?php
        //Print the results
        while ($row = mysqli_fetch_assoc($result)) {
            $first = $row['firstName'];
            $last = $row['lastName'];
            $jobTitle = $row['jobTitle'];
            $companyName = $row['companyName'];
            $linkedIn = $row['linkedIn'];
            $email = $row['email'];
            $add = $row['emailAdd'];
            $comment = $row['comment'];
            $format = $row['format'];
            $met = $row['met'];
            $timestamp = date('m-d-Y', strtotime($row['timeFilled']));
            echo "<tr>
                <td>$first $last</td>
                <td>$jobTitle</td>
                <td>$companyName</td>
                <td>$linkedIn</td>
                <td>$email</td>
                <td>$add</td>
                <td>$comment</td>
                <td>$format</td>
                <td>$met</td>
                <td>$timestamp</td>
              </tr>";
        }
        ?>

        </tbody>
    </table>

    <a href="guestbook.html">Add a guest</a>

</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>


<script>
    //$('#student-table').DataTable();

    $('#guestbook-table').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
</script>

</body>
</html>



