<?php

/* 
  Write you php code here

   */
  $quantit_want = 70;

  $quantity_in_stock = 100;

  $comparison = ($quantit_want <= $quantity_in_stock);


?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p> <?= $comparison ?></p>

</body>

</html>