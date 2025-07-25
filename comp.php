<?php
include("connection.php");
$query = "SELECT * FROM product";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
if(isset($_POST['add'])) {
if (isset($_SESSION['cart'])) {
   $item_id =  array_column($_SESSION['cart'],column_key:'product_id'); 
if(in_array($_POST['product_id'],$item_id)) {
    echo "<script> alert('Product is already in the cart.') </script>";
}else {
 $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );
    $_SESSION['cart'][0] = $item_array;
}



}function component($pname, $price, $image, $desc,$productid) {
    $element = "
    <form method='post' id='formId'>
        <a href='products.php?productid={$productid}'>
            <div id='fix'>
                <div class='card'>
                    <div class='{$image}'></div>
                    <div class='description'>
                        <div class='head_sellers'>$pname</div>
                        <div class='subhead_sellers'>$desc</div>
                        <div class='price'>₹$price</div>
                    </div>
                </div>
            </div>
        </a>
        <div id='cartc'>
            <div class='add1'>
                <button name='add' class='add2'>Add to Cart</button>
                <input type='hidden' name='product_id' value='$productid'> <!-- Added this line -->
            </div>
        </div>
    </form>";
    echo $element;
}


function cart($pname, $price, $image, $desc, $link, $productid) {
    $element = 
         '<form action="cart.php?action=remove&id=' . $productid . '" method="post" class="cart-items">
          <div class="cart">
            <div class="' . $image . '"></div>
            <div class="cart_description">
              <h1>' . $pname . '</h1>
              <br />
              <h5>
                ' . $desc . '
              </h5>
              <button id="confirm" name="remove">Remove</button>
            </div>
            <div id="counter">
              <input type="number" id="count" placeholder="1" min="1"/>
            </div>
            <div id="cart_price"><div class="price"><i class="fa-solid fa-indian-rupee-sign"></i> ' . $price . '</div></div>
          </div>
        </form>';
    echo $element;
}

function page($pname, $price, $image, $desc, $productid ) {
    $element = '    <div id="content">
    <form method = "post" id = "formid">
      <div class="parallel">
        <div id="par">
          <div class="' . $image . '"></div>
        </div>
        <div id="par2">
          <h1>' . $pname . '</h1>
          <br />
          <h3>Premium Built-In Microphone</h3>
          <center>
            <div class="parallel">
              <div id="price"><i class="fa-solid fa-indian-rupee-sign"></i> ' . $price . '</div>
            </div>
            <button id = "addtocart" name = "add">Add to Cart</button>
             <input type="hidden" name="product_id" value= ' . $productid . '>
                  <div id="description">
        <h1>Description</h1>
        <br />
        ' . $desc . '
      </div>
</center>
        </div>
      </div>
      <div id="review">
        <center>
          <h1>Review</h1>
          <br />
          <br />
          There are no reviews yet.
          <br /><br />
          <h3>
            Be the first to review “S3 Wireless Headset” Your email address will
            not be published. Required fields are marked *
          </h3>
          <br /><br />
          <h1>
            <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i
            ><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i
            ><i class="fa-regular fa-star"></i>
          </h1>
          <textarea>Your review*</textarea>
          <br />
          <button id="submit">Submit</button>
        </center>
      </div>
      </form>
    </div>';
    echo $element;
}

?>
