<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
    <?php include('loginheader.php') ?>


    <main>
        <div class="contact_us">
            <h1>Contact Us</h1>
        </div>

        <div class="container">

            <div class="row">
                <form action="">
                    <input type="text" placeholder="Enter your full name" name="name" required />
                    <input type="email" placeholder="Enter your email address" name="email" required />
                    <input type="text" placeholder="Enter subject" name="subject" required />
                    <textarea placeholder="Enter your message" required></textarea>
                    <input type="submit" value="Submit" style="width: 10vw; margin-bottom: 5vh;" />
                </form>
            </div>
        </div>

        <?php include('footer.php') ?>
</body>

</html>