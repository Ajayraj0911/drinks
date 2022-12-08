<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non-Alcoholic</title>
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

        .image img {
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

        .reason h1 {
            font-size: 35px;
            margin-top: 70px;
        }
    </style>
    <main>
        <div class="reason">
            <h1><b>Which one would you like?</b></h1>
        </div>

        <div class="main">
            <!--cards -->
            <div class="card">
                <div class="title">
                    <h1>Soft Drinks</h1>
                </div>
                <div class="image">
                    <a href="softdrinks.php"><img src="img/Soft drinks.jpg" alt="Soft Drinks"></a>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="title">
                    <h1>Chocolate Drinks</h1>
                </div>
                <div class="image">
                    <a href="chocolatedrinks.php"><img src="img/chocolate drinks.jpg" alt="chocolate Drinks"></a>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="title">
                    <h1>Coffee</h1>
                </div>
                <div class="image">
                    <a href="coffee.php"><img src="img/coffee.jpg" alt="Coffee"></a>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="title">
                    <h1>Energy Drinks</h1>
                </div>
                <div class="image">
                    <a href="energydrinks.php"><img src="img/Energy drinks.jpg" alt="Energy Drinks"></a>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="title">
                    <h1>Healthy Drinks</h1>
                </div>
                <div class="image">
                    <a href="healthydrinks.php"><img src="img/Healthy drinks.jpg" alt="Healthy Drinks"></a>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="title">
                    <h1>Juice</h1>
                </div>
                <div class="image">
                    <a href="juice.php"><img src="img/juice.jpg" alt="Juice"></a>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="title">
                    <h1>Milk Shakes</h1>
                </div>
                <div class="image">
                    <a href="milkshakes.php"><img src="img/shakes.jpg" alt="Milk Shakes"></a>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="title">
                    <h1>Ice Drinks</h1>
                </div>
                <div class="image">
                    <a href="icedrinks.php"><img src="img/ice drinks.jpg" alt="Ice Drinks"></a>
                </div>
            </div>
        </div>

        <?php include('footer.php') ?>
</body>

</html>