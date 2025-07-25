<?php
include("Redirect.php");
include("profile.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SymbiZone | Home</title>
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
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="images/categories/icon.png" />
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
    <div id="front_banner">
          <br>
      <a href="phone.php" target="_blank"
        ><div id="frontbanner1"></div
      ></a>
      <a href="laptop.php" target="_blank">
        <div id="frontbanner2"></div
      ></a>
    </div>
    <center>
      <a name="categories_scroll"></a>
      <button class="shop"><a href="#Best_Sellers">SHOP NOW</a></button>
    </center>
    <div id="categories">
      <div class="heading">Shop By Categories</div>
      <div class="container">
        <a href="phone.php" target="_blank">
          <div class="box1">
            <img
              src="images/categories/phone-transformed.png"
              height="220px"
              width="auto"
              class="image_hover"
            />
          </div>
        </a>
        <a href="laptop.php" target="_blank">
          <div class="box2">
            <img
              src="images/categories/test.png"
              height="210px"
              width="210px"
              class="image_hover"
            />
          </div>
        </a>
        <a href="tv.php" target="_blank">
          <div class="box3">
            <img
              src="images/categories/tv1.png"
              height="190px"
              width="auto"
              class="image_hover"
            />
          </div>
        </a>
        <a href="headphone.php" target="_blank">
          <div class="box4">
            <img
              src="images/categories/ear.png"
              height="180px"
              width="auto"
              class="image_hover"
            />
          </div>
        </a>
        <a href="watch.php" target="_blank">
          <div class="box5">
            <img
              src="images/categories/watch1.png"
              height="180px"
              width="auto"
              class="image_hover"
            />
          </div>
        </a>
      </div>
      <center>
        <div id="deals_banner">
          <img src="images/banners/set.jpg" height="500px" />
        </div>
      </center>
      <a name="Best_Sellers"></a>
    </div>
    <div class="heading">Best Sellers</div>
    <div class="container">
              <?php
    $counter = 0; 
    while ($row = mysqli_fetch_assoc($result)) {
        component($row['pname'], $row['price'], $row['image'], $row['descr'], $row['id']);
        $counter++; 
        if ($counter >= 4) {
            break; 
        }
    }
    ?>
    </div>
    <br /><br />
    <div class="container">
      <?php
    $counter = 0; 
    while ($row = mysqli_fetch_assoc($result)) {
        component($row['pname'], $row['price'], $row['image'], $row['descr'], $row['id']);
        $counter++; 
        if ($counter >= 4) {
            break; 
        }
    }
    ?>
    </div>
    <br /><br />
    <div class="container">
            <?php
    $counter = 0; 
    while ($row = mysqli_fetch_assoc($result)) {
        component($row['pname'], $row['price'], $row['image'], $row['descr'], $row['id']);
        $counter++; 
        if ($counter >= 4) {
            break; 
        }
    }
    ?>
    </div> 
    <div id="discount_banner">
      <a href="phone.php">
        <div id="discount_banner1">
          <img src="images/banners/disc.jpeg" height="200px" width="635px" />
        </div>
      </a>
      <a href="watch.php">
        <div id="discount_banner2">
          <img src="images/banners/disc2.jpg" height="200px" width="635px" />
        </div>
      </a>
    </div>
    <div class="heading">Latest Arrivals</div>
    <div class="container">
      <?php
    $counter = 0; 
    while ($row = mysqli_fetch_assoc($result)) {
        component($row['pname'], $row['price'], $row['image'], $row['descr'], $row['id']);
        $counter++; 
        if ($counter >= 4) {
            break; 
        }
      }
    ?>
    </div>
    <div class="center">
      <div id="end_banner">
        <img src="images/banners/end.jpg" width="1300" height="200" />
      </div>
    </div>
    <br />
    <br />
    <br />
    <br />
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
