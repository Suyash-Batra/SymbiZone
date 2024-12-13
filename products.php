<?php 
include("Redirect.php");
include("profile.php");
require_once("comp.php");
      if (isset($_GET['productid'])) {
        $c = $_GET['productid'];
      }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SymbiZone - Buy good quality gadgets</title>
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
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="product_page.css" />
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
<?php 
$q = "SELECT * FROM product where id = $c";
$p = mysqli_query($con, $q);
$show = mysqli_fetch_assoc($p);

page($show['pname'], $show['price'], $show['image'], $show['descr'], productid: $show['id']);

?>
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
      <div id="mode">
        <a href="light mode/product page/products.php"
          ><i class="fa-solid fa-sun"></i
        ></a>
      </div>
    </footer>
  </body>
</html>
