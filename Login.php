<?php

session_start();
include("connection.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        //read from database
        $query = "select * from users where email = '$email'  limit 1";

        $result = mysqli_query($con, $query);

        $total = mysqli_num_rows($result);

        if ($result) {
            if ($result && $total > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] == $password) {
                    $_SESSION['user_id'] == $user_data['user_id'];
                    $_SESSION['email'] = $email;

                    if ($user_data['usertype'] == "admin") {
                        $_SESSION['username'] = $email;
                        header('Location: adminhome.php');
                    } else if ($user_data['usertype'] == "user") {
                        $_SESSION['firstName'] = $user_data['firstName'];
                        $_SESSION['cusername'] = $email;
                        header('Location: loginhome.php');
                    } else {
                        $_SESSION['status'] = "Email / Password is Invalid";
                        header('Location: login.php');
                    }
                }
            }
        }
        $_SESSION['status'] = "Wrong UserName or Password!";
    } else {
        $_SESSION['status'] = "Please enter valid information!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .login-box {
            width: 360px;
            height: 60vh;
            margin: auto;
            border-radius: 3px;
            background-color: white;
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
            color: #49c1a2;
        }

        .login-bg {
            background-image: url("img/drinks3.jpg");
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
    <?php include('header.php') ?>

    <div class="login-bg">
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="login-box">
            <h1 style="font-size: 6vh;">Login</h1>
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
                <label>Email</label>
                <input type="email" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write the email in correct format" required />
                <label>Password</label>
                <input type="password" placeholder="Enter password" name="password" title="please correct password" required />

                <input type="submit" value="Submit" />
                <closeform></closeform>
            </form>
            <p class="para-2">
                Not have an account? <a href="signup.php">Sign Up Here</a>
            </p>

        </div><br>
        <br><br><br><br><br><br><br><br><br><br>

    </div>

    <?php include('footer.php') ?>
</body>

</html>