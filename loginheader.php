<?php
session_start();

error_reporting(0);
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
    </style>
    <header style="top: 0;z-index: 1;background-color: white;">
        <div class=" icon_1">
            <h1><a href="index.php">Drinks.com</a></h1>
        </div>
        <div class="search">
            <input type="text" placeholder="Search"><img src="img/search.png" alt="search image" width="15px" height="15px" style="margin-right: 10px;margin-top: 4px;">
        </div>
        <div class=" icon_2">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                    <?php if($_SESSION['email'] == true){
                       ?>
                        <li>
                        <h5>Welcome <?php echo $_SESSION['firstName']; ?></h5>
                    </li>
                    <li><a href="logout.php">Logout</a></li>    
                <?php
                    }else{
                        ?>
                        <li><a href="Login.php">Login</a></li>
                    <li><a href="Signup.php">Signup</a></li>
                    <?php  
                    }
                    ?>
                   
                    <li><a href="shoppingcart.php"><button style="height: 1vh; border-radius: 50%; margin-top: 0.5vh;margin-left: 2vh;cursor: pointer;"><img src="img/pngfind.com-cart-logo-png-891718.png" alt="Shopping cart"></button></a></li>
                    <li><a href="account.php"><button style="height: 1vh; border-radius: 50%;margin-top: 0.5vh; margin-left: 4vh;"><img src="img/clipart3486771.png" alt="Account logo"></button></a></li>
                </ul>
            </nav>
        </div>
    </header>


</body>

</html>