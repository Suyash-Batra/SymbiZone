<?php 
include("Redirect.php");
include("profile.php");
require_once("comp.php");
if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SymbiZone | My Cart</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="icon" href="images/categories/icon.png" />
    <link
      href="https://fonts.googleapis.com/css?family=Plus+Jakarta+Sans:200,300,regular,500,600,700,800,200italic,300italic,italic,500italic,600italic,700italic,800italic"
      rel="stylesheet"
    />
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
    <div id="main_head">Your Cart ( <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                        echo $count;
                        }else{
                            echo "0";
                        }

                        ?> items)</div>
    <div id="cart_container">
        <?php
  if (isset($_SESSION['cart'])) { 
      $product_id = array_column($_SESSION['cart'], 'product_id');
      while ($row = mysqli_fetch_assoc($result)) {
          foreach ($product_id as $id) {
              if ($row['id'] == $id) {
                  cart($row['pname'], $row['price'],$row['image'],$row['descr'], $row['link'], $row['id']);
              }
          }
      }
  }
        ?>
    </div>
    <div class="empty"></div>
        <center>
    <h5 style="color: white";>(Note that the cart will be deleted after clicking logout or after destroying the session.)</h5>
</center><br><br>
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