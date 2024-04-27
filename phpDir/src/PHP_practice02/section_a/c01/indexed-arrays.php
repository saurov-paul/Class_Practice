<?php

/* 
  Write you php code here

   */

   $best_sellers = ["Chocolate", "Mints", "Fudge", "Bubble gum", "Toffee", "Jelly"]

?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>
  <ul>
    <li>Number 1 best seller candy is : <?php echo $best_sellers[1] ?></li>
    <li>Number 2 best seller candy is : <?php echo $best_sellers[3] ?></li>
    <li>Number 3 best seller candy is : <?php echo $best_sellers[5] ?></li>
  </ul>

</body>

</html>