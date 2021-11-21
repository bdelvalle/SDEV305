<!doctype html>
<html lang="en">

<?php

// error reporting
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

//Redirect if form has not been submitted
if (empty($_POST)) {
    header("location: index.html");
}

// set time zone
date_default_timezone_set('America/Los_Angeles');
$timestamp = date("Y/m/d H:i:s");


include ('includes/header.php');
require ('/home/bdelvall/db.php');
require('includes/guestbookValidation.php');

?>

<body>

<div class="container" id="main">
    <div class="jumbotron shadow p-3" >
        <div class="container text-center">
            <h1 class="display-5 font-weight-bold">Barbara's Guestbook</h1>
            <p class="lead">Lets stay in touch!</p>
        </div>
    </div>
</div>



<div class="container">
<?php


//Data validation
$isValid = true;

//Get data from POST array

// fname validation
if (validName($_POST['fname'])) {
    $fname = $_POST['fname'];
}
else {
    echo "<p>Please provide a valid first name (Required)</p>";
    $isValid = false;
}

// lname validation
if (validName($_POST['lname'])) {
    $lname = $_POST['lname'];
}
else {
    echo "<p>Please provide a valid last name (Required)</p>";
    $isValid = false;
}

// email validation
if (!empty($_POST['email'])) {
    if (validEmail($_POST['email'])){
        $email = $_POST['email'];
    }
    else {
        echo "<p>Please provide a valid E-mail for mailing list (Example: johndoe@example.com)</p>";
        $isValid = false;
    }
}

// meeting validation
if (validMeeting($_POST['met'])) {
    $met = $_POST['met'];
}
else {
    echo "<p>Please specify how we met (Required)</p>";
    $isValid = false;
}

// linkedin validation
if (!empty($_POST['linkedin'])) {
    if(validateLinkedin($_POST['linkedin'])) {
        $linkedin = $_POST['linkedin'];
    }
    else
    {
        echo "<p>Please provide a valid LinkedIn address. (Example: https://www.linkedin.com/in/example/)</p>";
        $isValid = false;
    }
}

// mail list validation
if ($_POST['mailing'] === "on" && empty($_POST['email'])) {
    echo "Please provide an email for mailing list.";
    $isValid = false;
}
else if ($_POST['mailing'] === "on" && !empty($_POST['email'])) {
    if (!($_POST['inlineRadioOptions'] === "option1") && !($_POST['inlineRadioOptions'] === "option2")) {
        echo "<p>Please choose a mailing option (HTML or Text)</p>";
        $isValid = false;
    }
}

// email format validation
if ($_POST['inlineRadioOptions'] === "option1" && $_POST['mailing'] === "on"){
    $mailing = "HTML";
}
else if ($_POST['inlineRadioOptions'] === "option2" && $_POST['mailing'] === "on"){
    $mailing = "Text";
}
else if (($_POST['inlineRadioOptions'] === "option1") && !($_POST['mailing'] === "on")
    || ($_POST['inlineRadioOptions'] === "option2") && !($_POST['mailing'] === "on")) {
    echo "You must check the opt-in into mailing list box in order to choose an email format";
    $isValid = false;
}

// no validation required
$jobTitle = $_POST['jobtitle'];





//    Save data to database
$sql = "INSERT INTO guestbook(`fname`, `lname`, `jobtitle`,`linkedin`, `email`, `met`, `mailing`,`date_signed`) VALUES
    ('$fname', '$lname', '$jobTitle', '$linkedin','$email', '$met', '$mailing','$timestamp')";
if($isValid) {
    echo "<h1 class='text-center'>Thank you for signing up, <strong>$fname</strong>!<br> I look forward to keeping in touch with you!</h1><br>";
}


echo ("<pre>");
if (!$isValid) {
    echo "<a class='container text-center btn btn-dark' href='https://barbara.greenriverdev.com/sdev305/portfolio/guestbook/' role='button'>Return back to guest form</a>";

    return;

}
else {
    echo "Form submission: successful! <br>";
    echo "Data submitted: <br>";
    echo "First name: " . $fname . "<br>";
    echo "Last name: " . $lname . "<br>";
    echo "Job Title: " . $jobTitle . "<br>";
    echo "LinkedIn: " . $linkedin . "<br>";
    echo "E-mail: " . $email . "<br>";
    echo "Met By: " . $met . "<br>";
    echo "Mailing List Method: " . $mailing . "<br>";
}
echo ("</pre>");

$success = mysqli_query($cnxn, $sql);
if (!$success) {
    echo "<p>Sorry.... something went wrong.</p>";
    return;
}


echo "<a class='container text-center btn btn-dark' href='https://barbara.greenriverdev.com/sdev305/portfolio/guestbook/' role='button'>Return back to guest form</a>";

?>


</div>
</body>
</html>