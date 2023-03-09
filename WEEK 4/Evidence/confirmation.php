<?php

   session_start();
   $quantity = $_SESSION['sesQuant'];
   $size = $_SESSION['sesSize'];

   echo "<h2> Your order qty is $_SESSION[sesQuant] </h2></br>";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>";
   echo "<h2> in the size $_SESSION[sesSize] </h2></br>";

   switch ($size)
   {
      case $size == 'Small'; $price=15.75;
      break;
      case $size == 'Medium'; $price=16.76;
      break;
      case $size == 'Large'; $price=17.75;
      break;
      case $size == 'Extra Large'; $price=18.75;
      break;
      default: $price=10;
   }

   $totalval = $price*$quantity;
   echo 'total price is ' .$totalval;
   
?>
 