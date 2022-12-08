<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    * {

        font-family: sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .container>h1 {
        padding: 20px 0;
    }

    .cart {
        display: flex;
    }

    .products {
        flex: 0.75;
    }

    .product {
        display: flex;
        width: 100%;
        height: 200px;
        overflow: hidden;
        border: 1px solid silver;
        margin-bottom: 20px;
    }

    .product:hover {
        border: none;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        transform: scale(1.01);
    }

    .product>img {
        width: 300px;
        height: 200px;
        object-fit: cover;
    }

    .product>img:hover {
        transform: scale(1.04);
    }

    .product-info {
        padding: 20px;
        width: 100%;
        position: relative;
    }

    .product-name,
    product-price,
    .product-offer {
        margin-bottom: 20px;
    }

    .product-remove {
        position: absolute;
        bottom: 20px;
        right: 20px;
        padding: 10px 25px;
        background-color: green;
        color: white;
        cursor: pointer;
        border-radius: 5px;
    }

    .product-remove:hover {
        background-color: white;
        color: green;
        font-weight: 600;
        border: 1px solid green;
    }

    .product-quantity>input {
        width: 40px;
        padding: 5px;
        text-align: center;
    }

    .fa {
        margin-right: 5px;
    }

    .cart-total {
        flex: 0.25;
        margin-left: 20px;
        padding: 20px;
        height: 240px;
        border: 1px solid silver;
        border-radius: 5px;
    }

    .cart-total p {
        display: flex;
        justify-content: space-between;
        margin-bottom: 30px;
        font-size: 20px;
    }

    .cart-total a {
        display: block;
        text-align: center;
        height: 40px;
        line-height: 40px;
        background-color: tomato;
        color: white;
        text-decoration: none;
    }

    .cart-total a:hover {
        background-color: red;
    }

    @media screen and (max-width: 700px) {
        .remove {
            display: none;
        }

        .product {
            height: 150px;
        }

        .product>img {
            height: 150px;
            width: 200px;
        }

        .product-name,
        product-price,
        .product-offer {
            margin-bottom: 10px;
        }
    }

    @media screen and (max-width: 900px) {
        .cart {
            flex-direction: column;
        }

        .cart-total {
            margin-left: 0;
            margin-bottom: 20px;
        }
    }

    @media screen and (max-width: 1220px) {
        .container {
            max-width: 95%;
        }
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

    .main {
        margin-bottom: 50px;
        /* margin: 2%; */
    }
</style>

<body>

    <?php include('loginheader.php') ?>

    <div class="container">
        <h1>Shopping Cart</h1>
        <div class="main">
            <div class="cart">
                <div class="products">
                    <div class="product">
                        <img src="img/alkoli.jpg">
                        <div class="product-info">
                            <h3 class="product-name" style="font-size: 20px;">New Shoes</h3>
                            <h4 class="product-price" style="font-size: 15px;">₹ 1,000</h4>
                            <h4 class="product-offer" style="font-size: 15px;">50%</h4>
                            <p class="product-quantity" style="font-size: 15px;">Qnt: <input value="1" name="" style="font-size: 15px;">
                            <p class="product-remove">
                                <span class="remove" style="font-size: 15px;">Remove</span>
                            </p>
                        </div>
                    </div>
                    <div class="product">
                        <img src="img/apple.jpg">
                        <div class="product-info">
                            <h3 class="product-name" style="font-size: 20px;">New Bag</h3>
                            <h4 class="product-price" style="font-size: 15px;">₹ 2,000</h4>
                            <h4 class="product-offer" style="font-size: 15px;">40%</h4>
                            <p class="product-quantity" style="font-size: 15px;">Qnt: <input value="1" name="" style="font-size: 15px;">
                            <p class="product-remove">
                                <span class="remove" style="font-size: 15px;">Remove</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cart-total">
                    <p>
                        <span>Total Price</span>
                        <span>₹ 3,000</span>
                    </p>
                    <p>
                        <span>Number of Items</span>
                        <span>2</span>
                    </p>
                    <p>
                        <span>You Save</span>
                        <span>₹ 1,000</span>
                    </p>
                    <a href="#" style="font-size: 15px;">Proceed to Checkout</a>
                </div>
            </div>
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