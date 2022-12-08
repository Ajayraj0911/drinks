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
                    <li><a href="adminhome.php">AdminHome</a></li>
                    <li><a href="adduser.php">Add User</a></li>
                    <li><a href="listuser.php">List User</a></li>
                    <li>
                        <h5>Welcome Admin</h5>
                    </li>
                    <li><a href="logout.php">Logout</a></li>
            </nav>
        </div>
    </header>


</body>

</html>