<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
//ini_set('memory_limit', '-1');
error_reporting(E_ALL);


// Start the session and give them a new session id
session_start();



//initialize vars
$un="";
$validLogin=true;

//if the user is already logged in
if (isset($_SESSION['username'])) {
    //redirect to homepage
    header("location:admin.php");
}

//if the form has been submitted
if (!empty($_POST)) {
    //get the form data
    $un=$_POST['username'];
    $pw=$_POST['password'];

    //require the credentials file, which defines the $login array
    require ('creds.php');

    //if the username is in the array and the pw match
    if (array_key_exists($un, $logins) && $pw == $logins[$un]) {

        //record the username in the session array
        $_SESSION['username'] = $un;

        //go to the page that the user came from , or else the admin page
        $page = isset($_SESSION['page']) ? $_SESSION['admin'] : "admin.php";
        header('location: '.$page);
    }


    //invalid login -- set flag variable
    $validLogin = false;

}

include('includes/navheader.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <style>
        .err {
            color: darkred;
        }
    </style>
</head>
<body>

<br>

<div class="jumbotron shadow p-3" >
    <div class="text-center">
        <h1 class="display-5 font-weight-bold">Barbara's Guestbook: Login Page</h1>
        <p class="lead">Lets connect.</p>
    </div>
</div>
<div class="container">

    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username"
                   value="<?php echo $un; ?>">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <span class="err">Incorrect login</span><br>

        <?php
        if (!$validLogin) {
            echo '<p class="err">Login is incorrect</p>';
        }
        ?>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>