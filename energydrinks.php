<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energy Drinks</title>
    <link rel="stylesheet" href="style.css">
</head>
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

<body>

    <?php include('loginheader.php') ?>

    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            font-family: arial;
        }

        .main {
            margin-bottom: 50px;
            margin: 2%;
        }

        .card {
            width: 20%;
            /* height: 50px; */
            display: inline-block;
            box-shadow: 1px 1px 10px black;
            border-radius: 5px;
            margin: 2%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 #f7444e;
        }

        .card img {
            width: 100%;
            height: 320px;
            margin-bottom: -2px;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;

        }

        .title {

            text-align: center;
            padding: 10px;

        }

        h1 {
            font-size: 20px;
        }

        .card button[name="one"] {
            border: none;
            outline: 0;
            padding: 14px;
            color: white;
            background-color: red;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 4.5vh;
        }

        .card button[name="one"]:hover {
            opacity: 0.7;
        }

        .reason h1 {
            font-size: 35px;
            margin-top: 10px;
        }

        .card-price {
            display: inline-block;

            width: 70px;
            height: 38px;

            background-color: gray;
            -webkit-border-radius: 3px 4px 4px 3px;
            -moz-border-radius: 3px 4px 4px 3px;
            border-radius: 3px 4px 4px 3px;

            border-left: 1px solid gray;

            /* This makes room for the triangle */
            margin-left: 19px;

            position: relative;

            color: white;
            font-weight: 200;
            font-size: 22px;
            line-height: 38px;

            padding: 0 5px 0 5px;
        }

        /* Makes the triangle */
        .card-price:before {
            content: "";
            position: absolute;
            display: block;
            left: -19px;
            width: 0;
            height: 0;
            border-top: 19px solid transparent;
            border-bottom: 19px solid transparent;
            border-right: 19px solid gray;
        }

        /* Makes the circle */
        .card-price:after {
            content: "";
            background-color: white;
            border-radius: 50%;
            width: 4px;
            height: 4px;
            display: block;
            position: absolute;
            left: -9px;
            top: 17px;
        }

        .card button[name="two"] {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: green;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button[name="two"]:hover {
            opacity: 0.7;
        }
    </style>

    <main>
        <div class="reason">
            <h1>Which one would you like?</h1>
        </div>

        <div class="main">
            <!--cards -->
            <div class="card">
                <div class="title">
                    <h1>Rockstar Energy</h1>
                </div>
                <img src="img/rockster.jpg" alt="Rockstar Energy" style="width:100%;height: 320px;">
                <p><a href="shippingaddress.php"><button name="one">Buy Now<p class="card-price">??2.2</p></button></a></p>
                <p><button name="two">Add to Cart</button></p>
            </div>
            <!--cards -->
            <div class="card">
                <div class="title">
                    <h1>Full Throttle Energy Drink</h1>
                </div>
                <img src="img/fullthrottle.png" alt="Full Throttle Energy Drink" style="width:100%;height: 300px;">
                <p><a href="shippingaddress.php"><button name="one">Buy Now<p class="card-price">??4.23</p></button></a></p>
                <p><button name="two">Add to Cart</button></p>
            </div>
            <!--cards -->
            <div class="card">
                <div class="title">
                    <h1>Amp Energy Drink</h1>
                </div>
                <img src="img/amp.jpg" alt="Amp Energy Drink" style="width:100%;height: 320px;">
                <p><a href="shippingaddress.php"><button name="one">Buy Now<p class="card-price">??5.24</p></button></a></p>
                <p><button name="two">Add to Cart</button></p>
            </div>
            <!--cards -->
            <div class="card">
                <div class="title">
                    <h1>Devil Energy Drink</h1>
                </div>
                <img src="img/devil.jpg" alt="NOS Energy Drink" style="width:100%;height: 320px;">
                <p><a href="shippingaddress.php"><button name="one">Buy Now<p class="card-price">??2.23</p></button></a></p>
                <p><button name="two">Add to Cart</button></p>
            </div>
            <!--cards -->
            <div class="card">
                <div class="title">
                    <h1>Sam's Club Monster Energy Drink</h1>
                </div>
                <img src="img/monsterenergy.jpg" alt="Sam's Club Monster Energy Drink" style="width:100%;height: 300px;">
                <p><a href="shippingaddress.php"><button name="one">Buy Now<p class="card-price">??5.62</p></button></a></p>
                <p><button name="two">Add to Cart</button></p>
            </div>
            <!--cards -->
            <div class="card">
                <div class="title">
                    <h1>Xyience Xenergy Drink</h1>
                </div>
                <img src="img/xyiene.jpg" alt="Xyience Xenergy Drink" style="width:100%;height: 320px;">
                <p><a href="shippingaddress.php"><button name="one">Buy Now<p class="card-price">??3.24</p></button></a></p>
                <p><button name="two">Add to Cart</button></p>
            </div>
            <!--cards -->
            <div class="card">
                <div class="title">
                    <h1>Powerade Zero Muscle Milk RTE</h1>
                </div>
                <img src="img/power.jpg" alt="Powerade Zero Muscle Milk RTE" style="width:100%;height: 300px;">
                <p><a href="shippingaddress.php"><button name="one">Buy Now<p class="card-price">??7.2</p></button></a></p>
                <p><button name="two">Add to Cart</button></p>
            </div>
            <!--cards -->
            <div class="card">
                <div class="title">
                    <h1 style="padding: 10px;">Hell Energy Drink</h1>
                </div>
                <img src="img/hell.jpg" alt="Gatorade Recover Whey Protein Shake" style="width:100%;height: 300px;">
                <p><a href="shippingaddress.php"><button name="one">Buy Now<p class="card-price">??5.27</p></button></a></p>
                <p><button name="two">Add to Cart</button></p>
            </div>


        </div>

        <?php include('footer.php') ?>
</body>

</html>