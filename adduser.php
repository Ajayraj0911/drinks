<?php
session_start();
include("connection.php");
include("function.php");

if (isset($_POST['adduserbtn'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = $_POST['update_usertype'];


    $email_query = "SELECT * FROM users WHERE email='$email' ";
    $email_query_run = mysqli_query($con, $email_query);
    if (mysqli_num_rows($email_query_run) > 0) {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
    }


    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password) && !empty($usertype)) {
        // save to database
        $user_id = random_num(20);

        $query = "INSERT INTO users (`user_id`, `firstName`, `lastName`, `email`, `password`, `usertype`) VALUES ('$user_id', '$firstName', '$lastName', '$email', '$password', '$usertype');";

        $result = mysqli_query($con, $query);

        if ($result) {
            $_SESSION['status'] = "data inserted successfully";
        } else {
            $_SESSION['status'] = "Please enter valid information!";
        }
    }
}

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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

        body {
            font-family: sans-serif;
        }

        .adduser-box {
            width: 360px;
            height: 570px;
            margin: auto;
            margin-top: 30px;
            margin-bottom: 30px;
            background-color: white;
            border-radius: 5px;
        }


        h1 {
            text-align: center;
            padding-top: 15px;
        }

        h4 {
            text-align: center;
        }

        form {
            width: 300px;
            margin-left: 20px;
        }

        form label {
            display: flex;
            margin-top: 20px;
            font-size: 18px;
        }

        form input {
            width: 100%;
            padding: 7px;
            border: none;
            border: 1px solid gray;
            border-radius: 6px;
            outline: none;
        }

        input[type="submit"] {
            width: 320px;
            height: 35px;
            margin-top: 20px;
            border: none;
            background-color: #49c1a2;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #f7444e;
        }

        p {
            text-align: center;
            padding-top: 20px;
            font-size: 15px;
        }

        .para-2 {
            text-align: center;
            color: black;
            font-size: 15px;
            margin-top: -10px;
        }

        .para-2 a {
            color: lightgreen;
        }

        .adduser-bg {
            background-image: url("img/adduser.jpg");
            min-height: 380px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .alert {
            padding: 10px;
            background-color: #f44336;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }

        .hey {
            font-size: 20px;
        }
    </style>


    <?php include('Adminheader.php') ?>

    <div class="adduser-bg"><br><br><br><br>
        <div class="adduser-box">
            <h1>Addd User</h1>
            <form method="POST">
                <?php
                if (isset($_SESSION['status'])) {
                ?>
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <strong class="hey">Hey!</strong><?php echo '<span style="font: 2em sans-serif;">' . $_SESSION['status'] . '</span><br>'; ?>
                    </div>
                <?php
                    unset($_SESSION['status']);
                }
                ?>
                <label>First Name</label>
                <input type="text" placeholder="Enter first name" name="firstName" autocomplete="off" />
                <label>Last Name</label>
                <input type="text" placeholder="Enter last name" name="lastName" autocomplete="off" />
                <label>Email</label>
                <input type="email" placeholder="Enter email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write the email in correct format" autocomplete="off" required />
                <label>Password</label>
                <input type="password" placeholder="Enter password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter" title="Eight or more characters" autocomplete="off" required />
                <div class="form-group">
                    <label>UserType</label>
                    <select name="update_usertype" class="form-control" style="height: 40px; width: 318px; border-radius: 5px;">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <input type="submit" name="adduserbtn" value="Submit" />
            </form>
        </div>

        <br><br><br>
    </div>
    <?php include('footer.php') ?>
</body>

</html>