<?php
/*Write your code here*/

$candy_stock = 0;
$stock = "Stock IN";
$sold = "Stock Out";
$message = ($candy_stock > 0) ?  $stock :$sold ;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Ternary Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?php
  /* Write your code here */
echo $message;
  
  ?>
</body>

</html>