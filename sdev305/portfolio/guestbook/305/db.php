<?php
    $username='bdelvall_bdelvall';
    $password = 'Moonsoul810!';
    $hostname = 'localhost';
    $database = 'bdelvall_guestbook';

    $cnxn = @mysqli_connect($hostname, $username, $password, $database)
        or die("Error connecting to database: "  . mysqli_connect_error());

