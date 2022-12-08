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

        table,
        th,
        td {
            padding: 15px;
            font-size: 20px;
            border: 1px solid;
        }

        td {
            text-align: center;
        }

        tr:hover {
            color: #000;
            background-color: #D6EEEE;
        }

        .alert {
            padding: 10px;
            background-color: #f44336;
            color: white;
            margin-bottom: 20px;
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

    <div class="container-fluid" style="margin: 50px;padding-bottom: 20px;">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;font-size: 40px;padding-top: 30px;padding-bottom: 20px;">Admin Profile</h6>
            </div>
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
            <div class="card-body">
                <div class="table-responsive">
                    <?php
                    $query = "SELECT * FROM users";
                    $query_run = mysqli_query($con, $query);
                    ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="background-color: rebeccapurple; color: white;">
                        <thead style="background-color: yellowgreen;">
                            <tr>
                                <th> ID </th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Email </th>
                                <th>Password</th>
                                <th>UserType</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($query_run) > 0) {
                                while ($row = mysqli_fetch_assoc($query_run)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['firstName']; ?></td>
                                        <td><?php echo $row['lastName']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td><?php echo $row['usertype']; ?></td>
                                        <td style="background-color: green;">
                                            <form action="update.php" method="post">
                                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" name="edit_btn" style="font-size: 20px;background-color: green;color: white;cursor: pointer;"><b> EDIT</b></button>
                                            </form>
                                        </td>
                                        <td style="background-color: red;">
                                            <form action="delete.php" method="post">
                                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" name="delete_btn" style="font-size: 20px;background-color: red;color: white;cursor: pointer;"><b> DELETE</b></button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "No Record Found";
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>


    <?php include('footer.php') ?>
</body>

</html>