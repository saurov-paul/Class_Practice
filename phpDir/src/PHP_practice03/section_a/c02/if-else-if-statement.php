<?php
/* Write your code here */
$Candy_stock = 0;
$order = 0;
$stock_in = "Stock IN";
$stock_out = "Stock Out";
$stock_coming ="Coming soon";


?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?php
  /* Write your code here */

  if ($Candy_stock > $order){
    echo $stock_in;
  }elseif($Candy_stock > $order){
echo $stock_coming;
  }else{
    echo $stock_out;
  }


  ?>
</body>

</html>