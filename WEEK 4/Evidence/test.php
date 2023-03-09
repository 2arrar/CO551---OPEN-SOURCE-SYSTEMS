<?php

   session_start();
   $quantity = $_SESSION['sesQuant'];
   $size = $_SESSION['size'];
   
   echo "<h2> Your order qty is $_SESSION[sesQuant] </h2></br>";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>";
   echo "<h2> in the size $_SESSION[sesSize] </h2></br>";

   switch ($_SESSION['sesSize'])
   {
      case $_SESSION['sesSize'] == 'Small'; $price=15.75;
      break;
      case $_SESSION['sesSize'] == 'Medium'; $price=16.76;
      break;
      default: $price=10;
   }
   echo 'total price is ' .$price;
   
?>
 