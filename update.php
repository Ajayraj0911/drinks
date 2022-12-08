<?php
session_start();
include('connection.php');

if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $firstname = $_POST['edit_firstname'];
    $lastname = $_POST['edit_lastname'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertype = $_POST['update_usertype'];

    $query = "UPDATE users SET firstname='$firstname',lastname='$lastname', email='$email', password='$password', usertype='$usertype' WHERE id='$id' ";
    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION['status'] = "Your Data is Updated";
        header('Location: listuser.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: listuser.php');
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

        .update-box {
            width: 360px;
            height: 530px;
            margin: auto;
            margin-top: 20px;
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

        .update-bg {
            background-image: url("img/update-bg.jpg");
            min-height: 380px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .form-control{
            height: 17px;
            width: 300px;
        }
    </style>


    <?php include('adminheader.php') ?>


    <div class="update-bg"><br><br><br><br>
        <div class="update-box">
            <h1 style="font-size: 6vh;">Update</h1>
            <form action="update.php" method="POST">
                <?php
                if (isset($_POST['edit_btn'])) {
                    $id = $_POST['edit_id'];

                    $query = "SELECT * FROM users WHERE id='$id' ";
                    $result = mysqli_query($con, $query);

                    foreach ($result as $row) {
                ?>
                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                        <div class="form-group">
                            <label> FirstName </label>
                            <input type="text" name="edit_firstname" value="<?php echo $row['firstName'] ?>" class="form-control" placeholder="Enter FirstName">
                        </div>
                        <div class="form-group">
                            <label> LastName </label>
                            <input type="text" name="edit_lastname" value="<?php echo $row['lastName'] ?>" class="form-control" placeholder="Enter LastName">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label>UserType</label>
                            <select name="update_usertype" class="form-control" style="height: 40px; width: 318px; border-radius: 5px;">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <br><br><br>
                        <a href="listuser.php" style="background-color: red;color: white;font-size: 15px;padding: 10px;"> CANCEL </a>
                        <button type="submit" name="updatebtn" style="background-color: green;color: white;font-size: 15px;padding: 10px;cursor: pointer;"> Update </button>

            </form>
    <?php
                    }
                }
    ?>
        </div>

        <br><br><br>
    </div>
    <?php include('footer.php') ?>
</body>

</html>