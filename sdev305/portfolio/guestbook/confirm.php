
<?php
// error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


if (empty($_POST)) {
    header('location: index.php');
}

// set time zone
date_default_timezone_set('America/Los_Angeles');
$timestamp = date("Y/m/d H:i:s");

include('includes/navheader.php');
require ('/home/bdelvall/db.php');
require('includes/guestbookValidation.php');
?>


<!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid bg-secondary-color">
    <div class="container text-dark">
        <h1 class="display-4">Thank you for keeping in touch!</h1>

    </div>
</div>

<main class="container text-white border-bottom">

    <?php

    $fname = $lname = $fullName = $title = $company = $email = $linkedin = $how_met = $specifyOther =
    $mailingList =
    $mailingType = "";

    $isValid = true;

    // validate first name
    if (validNames($_POST['fname'])) {
        $fname = $_POST['fname'];
        $fullName = $fname;
    } else {
        echo '<p>Please enter a valid first name</p>';
        $isValid = false;
    }

    // validate last name
    if (validNames($_POST['lname'])) {
        $lname = ($_POST['lname']);
        $fullName .= " ".$lname;
    } else {
        echo '<p>Please enter a valid last name</p>';
        $isValid = false;
    }

    // validate job title
    if (isset($_POST['title'])) {
        if (validText($_POST['title'])) {
            $title = ($_POST['title']);
        } else {
            $title = ($_POST['title']);
            echo '<p>Please enter a valid title</p>';
            $isValid = false;
        }
    }

    // validate company if entered
    if (isset($_POST['company'])) {
        if (validText($_POST['company'])) {
            $company = ($_POST['company']);
        } else {
            $company = ($_POST['company']);
            echo '<p>Please enter a valid company</p>';
            $isValid = false;
        }
    }

    // validate email
    if (isset($_POST['email'])) {
        if (validEmail($_POST['email'])) {
            $email = ($_POST['email']);
        } else {
            $email = ($_POST['email']);
            echo '<p>Please enter a valid email</p>';
            $isValid = false;
        }
    }


    if (!empty($_POST['linkedin'])) {
        if(validURL($_POST['linkedin'])) {
            $linkedIn = $_POST['linkedin'];
        }
        else
        {
            echo "<p>Please provide a valid LinkedIn address. (Example: https://www.linkedin.com/in/example/)</p>";
            $isValid = false;
        }
    }

    // validate how we met
    if (!isset($_POST['how-met'])) {
        echo '<p>Please enter the way we met.</p>';
        $isValid = false;
    } else {
        if (validMet($_POST['how-met'])) {
            $how_met = ($_POST['how-met']);
        } else {
            echo '<p>Please enter a valid way we met</p>';
            $isValid = false;
        }
    }


    // check mailing list
    if (isset($_POST['mailingList'])) {
        $mailingList = true;
    } else {
        $mailingList = false;
    }

    // ensure email field is filled out if they want on the mailing list
    if ($mailingList) {
        if (empty($email) || !validEmail($email)) {
            echo '<p>If you want to be added to the mailing list, please enter your email.</p>';
            $isValid = false;
        }

    } else if (isset($_POST['htmlORtext'])) {
        echo '<p>You didn\'t sign up for the mailing list, do you can\'t pick a format.</p>';
        $isValid = false;
    }

    if ($isValid) {
        $fromEmail = "del-valle.barbara@student.greenriverdev.edu";


        echo "<p>Name: $fullName</p>";
        echo "<p>Job Title: $title</p>";
        echo "<p>Company: $company</p>";
        echo "<p>email: $email</p>";
        echo "<p>LinkedIn URL: $linkedin</p>";
        echo "<p>How we met: $how_met</p>";
        if ($how_met == 'other') {
            echo "<p>Other way we met: $specifyOther</p>";
        }

        echo "<p>Sign up for mailing list?: ";
        if ($mailingList) {
            echo 'Yes';
        } else {
            echo 'No';
        }
        echo "</p>";
        if ($mailingList) {
            echo "<p>Preferred email format: $email</p>";
        }




        $sql = "INSERT INTO guestbook(`fname`, `lname`, `jobtitle`, `linkedin`, `email`,`met`, `mailing`, `date_signed`)
					VALUES ('$fname', '$lname', '$title', '$linkedin','$email', '$how_met', '$mailingList', '$timestamp')";
        $success = mysqli_query($cnxn, $sql);
        if (!$success) {
            echo '<p>Oops, something is wrong! </p>';
            return;
        }
    }
    ?>

</main>
