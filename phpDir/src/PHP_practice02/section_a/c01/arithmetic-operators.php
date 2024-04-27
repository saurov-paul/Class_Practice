<?php

/* 
  Write you php code here

   */

   $cost_of_per_pack  = 5;
   $tax_rate  = 0.20;

   $subtotal = $cost_of_per_pack * 3;

   $tax_amount = $subtotal * $tax_rate;

   $total_amount = $subtotal + $tax_amount;
?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p><?= "cost of per pack = $cost_of_per_pack " ?></p>
  <p><?= "Tax rate = $tax_rate " ?></p>
  <p><?= "Total amount = $total_amount " ?></p>

</body>

</html>