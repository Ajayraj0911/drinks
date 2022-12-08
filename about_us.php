<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
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

        .banner3 {
            position: relative;
            width: 100%;
            height: 90vh;
            margin: 0 auto;
        }

        .banner3 img {
            width: 100%;
        }

        .heading3 {
            color: white;
            position: absolute;
            top: 17%;
            width: 35%;
            left: 50px;
            font-size: 3rem;
        }

        .sentence3 {
            color: wheat;
            position: absolute;
            top: 35%;
            width: 43%;
            left: 50px;
            font-size: 20px;
        }
    </style>
    <?php include('loginheader.php') ?>


    <main>
        <div class="contact_us">
            <h1>About Us</h1>
        </div>
        <div class="container2">
            <div class="row">

                <div class="banner3">
                    <img src="img/banner3.png" alt="Background Slide" style="width: 100%; height: 90vh; ">
                    <h2 class="heading3">About</h2>
                    <p class="sentence3">Drinks.com is a newly created website which works on selling non-alcoholic and alcoholic drinks for 10% off from the original market price. <br><br>We connect Customers to local shops for their alcohol drinks.Our brands are working by technology-driven team with retailer experience.<br><br>Never run out of booze at your house party again. Drinks.com is here for all your alcohol and drinks needs. Don’t worry. We provide pick-up and delivery options without the extra service fees.<br><br>We inspire, entertain and educate anyone—and everyone—interested in what happens in the glass and out of it</p>

                </div>


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


        <?php include('footer.php') ?>
</body>

</html>