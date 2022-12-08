<?php

    $server = "localhost:4306";
    $username = "root";
    $password = "";
    $dbname = "drinks";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if (!$con) {
        die("connection to the database is failed due to the " . mysqli_connect_error());
    }
?>