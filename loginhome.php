<?php
session_start();
  $email_user =  $_SESSION['email'];

  if($email_user == true){

  }else{
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
                    <li>
                        <h5>Welcome <?php echo $_SESSION['firstName']; ?></h5>
                    </li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="shoppingcart.php"><button style="height: 1vh; border-radius: 50%; margin-top: 0.5vh;margin-left: 2vh;cursor: pointer;"><img src="img/pngfind.com-cart-logo-png-891718.png" alt="Shopping cart"></button></a></li>
                    <li><a href="account.php"><button style="height: 1vh; border-radius: 50%;margin-top: 0.5vh; margin-left: 4vh;"><img src="img/clipart3486771.png" alt="Account logo"></button></a></li>
                </ul>
            </nav>
        </div>
    </header>

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

        .banner {
            position: relative;
            width: 100%;
            /* height: 90vh; */
            margin: 0 auto;
        }

        .banner img {
            width: 100%;
        }

        .heading {
            color: white;
            position: absolute;
            top: 40%;
            width: 90%;
            left: 80px;
            font-size: 3rem;
            text-shadow: 5px 5px 10px #000000;
        }

        .sentence {
            color: yellow;
            position: absolute;
            top: 63%;
            width: 90%;
            left: 80px;
            font-size: 25px;
            text-shadow: 5px 5px 10px #000000;
        }

        .banner2 {
            position: relative;
            width: 100%;
            height: 90vh;
            margin: 0 auto;
        }

        .banner2 img {
            width: 100%;
        }

        .heading2 {
            color: black;
            position: absolute;
            top: 17%;
            width: 35%;
            left: 850px;
            font-size: 3rem;
        }

        .sentence2 {
            color: red;
            position: absolute;
            top: 35%;
            width: 43%;
            left: 750px;
            font-size: 20px;
        }

        .points {
            position: absolute;
            color: red;
            top: 53%;
            width: 40%;
            left: 780px;
            font-size: 35px;
        }
    </style>

    <main>
        <div class="container">
            <div class="row">
                <div class="banner">
                    <img src="img/banner.png" alt="Background Slide" style="width: 100%; height: 90vh; ">
                    <h2 class="heading">Order Non-Alcoholic and Alcoholic <br> drinks on 10% OFF</h2>
                    <p class="sentence">Get your Favourite drinks in very low price .There are many varieties in every <br>category like beer,wine,soft drinks,juice & many more with 10% OFF. </p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="body">

            <h1>Select a category</h1>

        </div>

        <div class="options">

            <div class="non_alcoholic">
                <h1>Non-alcoholic Drinks</h1>
                <a href="non_alcoholic.php"><img src="img/drinks.jpg" alt="Non-Alcoholic"></a>
            </div>

            <div class="alcoholic">
                <h1>Alcoholic</h1>
                <a href="alcoholic.php"><img src="img/alcohol.jpg" alt="Alcoholic Drink"></a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container2">
            <div class="row">
                <div class="banner2">
                    <img src="img/banner2.png" alt="Background Slide" style="width: 100%; height: 90vh; ">
                    <h2 class="heading2">Why Shop with Us?</h2>
                    <p class="sentence2">We work hard to make shopping with us as easy as possible for our customers. We launched 2 or 3 new drinks every month for more varieties of drinks available for our customer.</p>
                    <div class="points">
                        <ul>
                            <li>Fast Delivery</li>
                            <li>Free Shipping Charges</li>
                            <li>Best Quality all over the world</li>
                            <li>24*7 open</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include('footer.php') ?>
</body>

</html>