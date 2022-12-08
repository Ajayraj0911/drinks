<!DOCTYPE html>
<html>

<head>
    <title>Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {

        font-family: sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
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
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #ddd;
        align-items: center;
        justify-content: center;
    }

    * {
        box-sizing: border-box;
    }

    .container {
        display: flex;
        width: 100%;
        height: 100%;
        padding: 20px 20px;
    }

    .box {
        flex: 30%;
        display: table;
        align-items: center;
        text-align: center;
        font-size: 20px;
        background-color: #0d1425;
        color: #fff;
        padding: 30px 30px;
        border-radius: 20px;
    }

    .box img {
        border-radius: 50%;
        border: 2px solid #fff;
        height: 250px;
        width: 250px;
    }

    .box ul {
        margin-top: 30px;
        font-size: 30px;
        text-align: center;
    }

    .box ul li {
        list-style: none;
        margin-top: 50px;
        font-weight: 100;
    }

    .box ul li i {
        cursor: pointer;
        margin: 10px;
        font-size: 40px;
    }

    .box ul li i:hover {
        opacity: 0.6;
    }

    .About {
        margin-left: 20px;
        flex: 50%;
        display: table;
        padding: 30px 30px;
        font-size: 20px;
        background-color: #fff;
        border-radius: 20px;
    }

    .About h1 {
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 50px;
        font-weight: 500;
    }

    .About ul li {
        list-style: none;
    }

    .About ul {
        margin-top: 20px;
    }

    @media screen and (max-width: 1068px) {
        .container {
            display: table;
        }

        .box {
            width: 100%;
        }

        .About {
            width: 100%;
            margin: 0;
            margin-top: 20px;
        }

        .About h1 {
            text-align: center;
        }
    }
</style>

<body>

    <?php include('loginheader.php') ?>

    <div class="container">
        <div class="box">
            <img src="img/acai.jpg" alt="">
            <ul>
                <li>AkshayrajNadar</li>
                <li>22 years</li>
                <li>Student</li>

            </ul>
        </div>
        <div class="About">
            <ul>
                <h1>about</h1>
            </ul>
            <ul>
                <h3>First Name</h3>
                <li>Akshayraj Nadar</li>
            </ul>
            <ul>
                <h3>Gender</h3>
                <li>male</li>
            </ul>
            <ul>
                <h3>Country</h3>
                <li>Uk</li>
            </ul>
            <ul>
                <h3>Age</h3>
                <li>22</li>
            </ul>
            <ul>
                <h3>Institute Name</h3>
                <li>Edinburg Napier University</li>
            </ul>
            <ul>
                <h3>Contact</h3>
                <li>ak0803@gmail.com</li>
            </ul>
        </div>
    </div>

    <div class="footer_info">
        <!-- footer info -->

        <div class="details">
            <h3>Details</h3>
            <p style="padding-bottom: 2vh;"><b>Address:</b>28 White tower, Street Name New York City, USA</p>
            <p style="padding-bottom: 2vh;"><b>Telephone:</b>+91 987 654 3210 </p>
            <p style="padding-bottom: 2vh;"><b>Email:</b>yourmain@gmail.com </p>
        </div>

        <div class="menu">
            <h3>Menu</h3>
            <ul>
                <li>Home</li><br>
                <li>About</li><br>
                <li>Services</li><br>
                <li>Testimonial</li><br>
                <li>Blog</li><br>
                <li>Contact</li>
            </ul>
        </div>

        <div class="account">
            <h3>Account</h3>
            <ul>
                <li>Account</li><br>
                <li>Checkout</li><br>
                <li>Login</li><br>
                <li>Register</li><br>
                <li>Shopping</li><br>
                <li>Widget</li>
            </ul>
        </div>

        <div class="newsletter">
            <h3>Newslwtter</h3>
            <p>Subscribe by our newsletter and get update.</p><br>
            <input type="text" placeholder="Enter your mail"><button class="button">Subscribe</button>
        </div>
    </div>


    <footer style="margin-top: 80px;">
        <div class="end">
            Copyright &copy;AkshayrajNadar
        </div>
    </footer>

</body>

</html>