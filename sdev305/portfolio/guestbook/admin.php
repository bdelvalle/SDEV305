<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
$page='admin';

//start session
session_start();


//if the user is not logged in
if (empty($_SESSION['username'])) {
    //store the current page in the session
    $_SESSION['page'] = "index.php";

    //redirect user to login page
    header ('location: login.php');
}

//Include files
include('includes/navheader.php');
require ('/home/bdelvall/db.php');

?>


<body>

<div class="container">


    <br>

    <div class="jumbotron shadow p-3" >
        <div class="text-center">
            <h1 class="display-5 font-weight-bold">Barbara's Guestbook</h1>
            <p class="lead">Lets connect.</p>
        </div>
    </div>

    <h1 class="font-weight-bold">Guestbook Summary</h1>
    <table id="guestbook-table" class="display">
        <thead>
        <tr>
            <td>Guest ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Job Title</td>
            <td>LinkedIn</td>
            <td>E-mail</td>
            <td>Met By</td>
            <td>Mail List Method</td>
            <td>Date Stamp</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM guestbook ORDER BY date_signed DESC";
        $result = mysqli_query($cnxn, $sql);

        foreach ($result as $row){
            $guest_id = $row['guest_id'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $jobTitle = $row['jobtitle'];
            $linkedin = $row['linkedIn'];
            $email = $row['email'];
            $met = $row['met'];
            $mailing = $row['mailing'];
            $dateSigned = date("M d, Y g:i a", strtotime($row['date_signed']));

            echo "<tr>";
            echo "<td>$guest_id</td>";
            echo "<td>$fname</td>";
            echo "<td>$lname</td>";
            echo "<td>$jobTitle</td>";
            echo "<td>$linkedin</td>";
            echo "<td>$email</td>";
            echo "<td>$met</td>";
            echo "<td>$mailing</td>";
            echo "<td>$dateSigned</td>";
            echo "</tr>";

        }
        ?>
        </tbody>
    </table>
</div>

<br>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="validation.js"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>
    $('#guestbook-table').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
</script>

</body>
