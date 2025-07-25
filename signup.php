<?php 
session_start();

	include("connection.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
  $q = sprintf("select * from id where user_name = '%s'", $_POST['user_name']);
  $e = mysqli_query($con, $q);
  $x = $_POST['user_name'];
  $y = strlen( $_POST['user_name']);
  if ($e) {
echo "<script>alert('Username \"$x\" already exists.'); window.location='signup.php';</script>";

  }
		$user_name = trim($_POST['user_name']);
		$password = $_POST['password'];
    $password_count = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

  
		if(!empty($user_name) && !empty($password) && !empty($email) && !empty($phone) && !is_numeric($user_name))
		{
      if ($password == $cpassword) {
			$query = "insert into id (user_name,password,email,phone,address) values ('$user_name','$password','$email','$phone','$address')";
			mysqli_query($con, $query);
      $_SESSION['email'] = $email;
      $_SESSION['phone'] = $phone;
      $_SESSION['address'] = $address;


			header("Location: login.php");
			die;
      }else {
        echo "<script> alert('Passwords dosent match'); </script>";
      }
		}else
		{
			echo "<script> alert('Please enter valid information'); </script>";
		}
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SymbiZone | Sign Up</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Plus+Jakarta+Sans:200,300,regular,500,600,700,800,200italic,300italic,italic,500italic,600italic,700italic,800italic"
      rel="stylesheet"
    />
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
          <div class="link_hover">
            <a href="index.php#categories_scroll">Categories</a>
          </div>
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
                <input
                  type="search"
                  name="q"
                  id="s-bar"
                  placeholder="Search..."
                />
              </div>
            </form>
          </div>
          <div class="link_hover">
            <a href="cart.php"
              ><i class="fa-solid fa-cart-arrow-down"></i> My Cart</a
            >
          </div>
<div id="profile" class="dropdown">
  <a href=#><i class="fas fa-user"></i></a>
  <div class="dropdown-content">
      <div id="main_head1">Welcome&nbsp;&nbsp;<?php echo $info['user_name']; ?>,</div>
        <form method="post"> 
          <br>
          <div id="info"><i class="fa-solid fa-circle-user"></i> &nbsp;&nbsp;- &nbsp;&nbsp;<?php echo $_SESSION['username']; ?></div><br>
          <div id="info"><i class="fa-solid fa-envelope"></i>  &nbsp;&nbsp;- &nbsp;&nbsp;<?php echo $info['email']; ?></div><br>
          <div id="info"><i class="fa-solid fa-phone"></i> &nbsp;&nbsp;- &nbsp;&nbsp;<?php echo $info['phone']; ?></div><br>
          <div id="info"><i class="fa-solid fa-location-dot"></i> &nbsp;&nbsp;- &nbsp;&nbsp;<?php echo $info['address'] ?></div>
          <center>
            <button type="submit" name="logout" class="shop1">Logout</button>
            <center>
        </form>
        </div>
          </div>
        </div>
      </div>
    </div>
    <div id="main_head">Sign up</div>
    <br /><br /><br />
    <center>
      <hr class="footer_line" />
      <br /><br /><br /><br />
      <form method="post" action="signup.php">
        <div class="box_parallel">
          <input type="text" placeholder="Username" class="input1" name="user_name">
          <input type="text" placeholder="Address" class="input1" name="address">
        </div>
         <div class="box_parallel">
          <input type="number" placeholder="Phone Number" class="input1" name="phone">  
          <input type="email" placeholder="Email" class="input1" name="email">
        <div class="box_parallel">
          <input type="password" placeholder="Create Password" class="input1" name="password"> 
          <input type="password" placeholder="Confirm Password" class="input1" name="cpassword"> 

        </div>
          <br />
        <br />
        <button type="submit" id="signin" name="submit" >Signin</button><br><br>
                <a href="login.php">
            <div class="white">Already have an account? Login.</div>
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
        <div class="social_media_icons">
          <a href="https://www.instagram.com/">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </div>
        <div class="social_media_icons">
          <a href="https://www.twitter.com/">
            <i class="fa-brands fa-x-twitter"></i>
          </a>
        </div>
        <div class="social_media_icons">
          <a href="https://www.facebook.com/">
            <i class="fa-brands fa-facebook"></i>
          </a>
        </div>
      </div>
      <br /><br /><br />
      <div id="copyright">
        Copyright <i class="fa-solid fa-copyright"></i> 2023 SymbiZone
      </div>
    </footer>
  </body>
</html>
