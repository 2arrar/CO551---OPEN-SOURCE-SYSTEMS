<?php
   session_start();
   $totalValue = $_SESSION['sesQuant'] * $_SESSION['sesPrice'];

   echo "<h2> Your order qty is $_SESSION[sesQuant] </h2></br>";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>";
   echo "<h2> Your total price is $totalValue.</h2>";
?>
 