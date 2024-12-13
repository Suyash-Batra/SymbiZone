<?php 
session_start();
include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        $query = "select * from id where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);


            if($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password) {
                    $_SESSION['username'] = $user_name;
                    header("location: index.php");
                } else {
                    echo "<script> alert('Wrong username or password'); </script>";
                }
            }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>SymbiZone | Profile</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Plus+Jakarta+Sans:200,300,regular,500,600,700,800,200italic,300italic,italic,500italic,600italic,700italic,800italic" rel="stylesheet" />
<link rel="icon" href="images/categories/icon.png" />
<link rel="stylesheet" href="cart.css" />
<link rel="stylesheet" href="style.css" />
<style>
    #search {
        border: none;
        background: none;
        padding: none;
    }
</style>
<script src="index.js"></script>
</head>
<body>
<div id="navbar">
    <div id="box1">
        <div class="links">
            <div class="link_hover"><a href="index.php">Home</a></div>
            <div class="link_hover"><a href="about.php">About</a></div>
            <div class="link_hover"><a href="index.php#categories_scroll">Categories</a></div>
        </div>
    </div>
    <div id="box2">
        <div id="logo">SymbiZone</div>
    </div>
    <div id="box3">
        <div class="links">
            <div class="link_hover">
                <button id="search" onclick="srch()">
                    <i class="fa-solid fa-magnifying-glass"></i> Search
                </button>
                <form autocomplete="off">
                    <div id="srch-bar">
                        <input type="search" name="q" id="s-bar" placeholder="Search..." />
                    </div>
                </form>
            </div>
            <div class="link_hover"><a href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i> My Cart</a></div>
            <div id="profile" class="dropdown">
                <a href=#><i class="fas fa-user"></i></a>
            </div>
        </div>
    </div>
</div>
<div id="main_head">Login</div>
<br /><br /><br />
<center>
    <form method="post">
        <hr class="footer_line" />
        <div id="container_profile">
            <input type="text" class="login" placeholder="Username" name="user_name" />
            <br />
            <input type="password" class="login" placeholder="Password" name="password">
        </div>
        <input id="signin" type="submit" value="Login">
        <br /><br />
        <a href="signup.php">
            <div class="white">Create an account.</div>
        </a>
    </form>
</center>
<div class="empty"></div>
<div class="center">
    <hr class="footer_line" />
</div>
<footer>
    <div id="footer_end">
        <div class="footer_end1">
            <b><a href="#">Service</a></b>
            <br /><br />
            <a href="#">FAQ</a>
            <br /><br />
            <a href="#">Speed test</a>
            <br /><br />
            <a href="#">Cookie</a>
        </div>
        <div class="footer_end1">
            <b><a href="#">Projects</a></b>
            <br /><br />
            <a href="#">SymbiZone</a>
            <br /><br />
            <a href="index.txt">HTML</a>
            <br /><br />
            <a href="style.txt">CSS</a>
        </div>
    </div>
    <div class="center">
        <hr class="footer_line" />
    </div>
    <div id="social_media">
        <div class="social_media_icons"><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></div>
        <div class="social_media_icons"><a href="https://www.twitter.com/"><i class="fa-brands fa-x-twitter"></i></a></div>
        <div class="social_media_icons"><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></div>
    </div>
    <br /><br /><br />
    <div id="copyright">
        Copyright <i class="fa-solid fa-copyright"></i> 2023 SymbiZone
    </div>
    <div id="mode">
        <a href="light mode/light_login.php"><i class="fa-solid fa-sun"></i></a>
    </div>
</footer>
</body>
</html>
