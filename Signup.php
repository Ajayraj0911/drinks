<?php
session_start();
include("connection.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $usertype = $_POST['usertype'];

    $email_query = "SELECT * FROM users WHERE email='$email' ";
    $email_query_run = mysqli_query($con, $email_query);
    if (mysqli_num_rows($email_query_run) > 0) {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        header('Location: signup.php');
        die();
    }

    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password) && !empty($confirmPassword)) {
        // save to database
        $user_id = random_num(20);

        if ($password == $confirmPassword) {
            $query = "INSERT INTO users (`user_id`, `firstName`, `lastName`, `email`, `password`,`usertype`) VALUES ('$user_id', '$firstName', '$lastName', '$email', '$password', '$usertype');";

            $result = mysqli_query($con, $query);

            if ($result) {
                $_SESSION['status'] = "Account is created";
                header('Location: login.php');
                die();
            }else{
                $_SESSION['status'] = "Account is not created";
                header('Location: Signup.php');
                die();
            }
        } else {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            header('Location: signup.php');
            die();
        }
    }
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

        .signup-box {
            width: 360px;
            height: 680px;
            margin: auto;
            margin-top: 20px;
            background-color: white;
            border-radius: 5px;
        }

        .login-box {
            width: 360px;
            height: 280px;
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
            color: lightgreen;
        }

        .signup-bg {
            background-image: url("img/drinks2.jpg");
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

        .hey{
            font-size: 30px;
        }
    </style>


    <?php include('header.php') ?>

    <div class="signup-bg"><br><br><br><br>
        <div class="signup-box">
            <h1 style="font-size: 6vh;">Sign Up</h1>
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
                <input type="text" placeholder="Enter first name" name="firstName" required />
                <label>Last Name</label>
                <input type="text" placeholder="Enter last name" name="lastName" required />
                <label>Email</label>
                <input type="email" placeholder="Enter email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write the email in correct format" required />
                <label>Password</label>
                <input type="password" placeholder="Enter password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter" title="Eight or more characters" required />
                <label>Confirm Password</label>
                <input type="password" placeholder="ReEnter password" name="confirmPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Please ReEnter your password" required />

                <input type="hidden" name="usertype" value="user">

                <input type="submit" value="Submit" />
            </form>
            <p>
                By clicking the Sign Up button,you agree to our <br />
                <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
            </p>
            <p class="para-2">
                Already have an account? <a href="login.php">Login here</a>
            </p>
        </div>

        <br><br><br>
    </div>
    <?php include('footer.php') ?>
</body>

</html>