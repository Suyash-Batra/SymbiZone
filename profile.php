<?php
	include("connection.php");

  $query = "select phone,email,address,user_name from id where user_name = '$_SESSION[username]'";
  $r = mysqli_query($con, $query);
  $info = mysqli_fetch_assoc($r);


if(isset($_POST['logout'])) {

    $_SESSION = array();

    session_destroy();
    mysqli_close($con);


    header("Location: login.php");
    exit;
}
require_once("comp.php");

?>

      