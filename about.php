<?php 
include("Redirect.php");
include("profile.php");
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SymbiZone | About </title>
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
    <link rel="stylesheet" href="cart.css" />

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
    <div id="animation"><p id="nameAnim">Suyash Batra&nbsp;</p></div>
    <br /><br /><br />
    <center>
      <hr class="footer_line" />
      <div id="about_us">
        <b>About Us</b>
        <br /><br />
        Welcome to SymbiZone, your one-stop destination for cutting-edge
        electronic gadgets and accessories! We are a passionate team of four
        college students who share a common love for technology and innovation.
        Our journey began as a group project in college, but it quickly evolved
        into something much bigger and more exciting.
        <br /><br />
        <b>Our Story</b>
        <br /><br />
        Our story is a classic example of turning a shared passion into a
        thriving business. As technology enthusiasts, we often found ourselves
        discussing the latest gadgets and gizmos, debating their features, and
        exploring ways to make them more accessible to everyone. What started as
        casual conversations soon transformed into a dream: to create a platform
        where people could easily discover and purchase the latest electronic
        gadgets.
        <br /><br />
        <b>Our Mission</b>
        <br /><br />
        At SymbiZone, our mission is simple but powerful: to provide our
        customers with top-quality electronic gadgets at affordable prices. We
        believe that technology should be accessible to everyone, and we're
        committed to making this a reality. We handpick every product on our
        platform, ensuring that it meets our high standards for quality and
        performance.
        <br /><br />
        <b>Why Choose Us</b>
        <br /><br />
        1. <b>Curated Selection</b>: We take the time to carefully curate our
        product catalog, offering you only the best and most innovative
        electronic gadgets on the market. <br /><br />
        2. <b>Affordable Pricing</b>: We understand that staying up-to-date with
        the latest technology can be expensive. That's why we strive to offer
        competitive prices that won't break the bank. <br /><br />
        3. <b>Exceptional Customer Service</b>: Our team is here to assist you
        every step of the way. If you have questions, concerns, or need
        assistance with anything, don't hesitate to reach out to us.
        <br /><br />
        4. <b>Secure Shopping</b>: Your online safety is our top priority. We
        utilize the latest security measures to ensure that your personal
        information is always protected. <br /><br />
        <b>Our Team</b>
        <br /><br />
        Meet the face behind SymbiZone:
        <br /><br />
        -<b>Suyash Batra</b>: The design wizard, ensuring our website looks
        sleek and user-friendly. <br /><br />
        <br /><br />
        We're thrilled to have you join us on this exciting journey. As a group
        of college students, we're constantly learning and growing, and we hope
        you'll grow with us. Whether you're a tech enthusiast, a casual gadget
        user, or someone looking for the perfect gift, we've got something for
        you.
        <br /><br />
        Thank you for choosing SymbiZone as your trusted source for electronic
        gadgets. We can't wait to help you discover the world of technology, one
        gadget at a time. If you have any feedback, suggestions, or just want to
        say hello, please don't hesitate to get in touch.
        <br /><br />
        Happy shopping!
        <br /><br />
        +91 12345678910
      </div>
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
