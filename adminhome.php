<?php
session_start();
include('connection.php');

$email_user =  $_SESSION['email'];

if ($email_user == true) {
} else {
    header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('adminheader.php') ?>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-size: 10px;
        }

        nav ul li {
            display: flex;
            align-items: center;
            height: 10vh;
            list-style: none;
            font-size: 20px;
            padding: 0 20px;
            transition: 0.15;
        }

        nav ul li:hover {
            background-color: #f7444e;
        }

        .search {
            border: 2px solid #f7444e;
            border-radius: 8vh;
        }

        .search input {
            border: none;
            border-radius: 8vh;
            padding: 1vh;
            font-size: 2vh;
            width: 40vh;
            outline: none;
        }

        .card {
            background-color: burlywood;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            font-size: 30px;
            width: 300px;
            height: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 8px 5px 5px #3B3131;
        }

        .container{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col mr-2">
                        <div class="text">Total Registered User</div>
                        <div class="h5">
                            <?php

                            $query = "SELECT id FROM users ORDER BY id";
                            $query_run = mysqli_query($con, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Total User: ' . $row . '</h4>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('footer.php') ?>
</body>

</html>