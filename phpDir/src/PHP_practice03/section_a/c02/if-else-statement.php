<?php
/*
Write your code here
*/
$candy_stock = 70;

?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?php
  /* Write your code here */
  if ($candy_stock < 0){
    echo "Sold Out";
  }else{
    echo "In Stock";
  }
  ?>
</body>

</html>