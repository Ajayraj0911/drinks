<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alcoholic</title>
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
            <h1>Which one would you like?</h1>
        </div>

        <div class="main">
            <!--cards -->
            <div class="card">
                <div class="title">
                    <h1>Gin</h1>
                </div>
                <div class="image">
                    <a href="gin.php"><img src="img/Gin.jpg" alt="Gin"></a>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="title">
                    <h1>Vodka</h1>
                </div>
                <div class="image">
                    <a href="vodka.php"><img src="img/Vodka.jpg" alt="Vodka"></a>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="title">
                    <h1>Amaretto</h1>
                </div>
                <div class="image">
                    <a href="amaretto.php"><img src="img/Amaretto.jpg" alt="Amaretto"></a>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="title">
                    <h1>Brandy</h1>
                </div>
                <div class="image">
                    <a href="brandy.php"><img src="img/Brandy.jpg" alt="Brandy"></a>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="title">
                    <h1>Campari</h1>
                </div>
                <div class="image">
                    <a href="campari.php"><img src="img/Campari.jpg" alt="Campari"></a>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="title">
                    <h1>Rum</h1>
                </div>
                <div class="image">
                    <a href="rum.php"><img src="img/Rum.jpg" alt="Rum"></a>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="title">
                    <h1>Whiskey</h1>
                </div>
                <div class="image">
                    <a href="whiskey.php"><img src="img/Whiskey.jpg" alt="Whiskey"></a>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="title">
                    <h1>Tequila</h1>
                </div>
                <div class="image">
                    <a href="tequila.php"><img src="img/Tequila.jpg" alt="Tequila"></a>
                </div>
            </div>
        </div>

        <?php include('footer.php') ?>
</body>

</html>