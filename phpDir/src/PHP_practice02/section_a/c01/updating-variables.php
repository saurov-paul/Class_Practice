<?php

/* 
  Write you php code here

   */

   $name = "Guest";
   $costPerPack = 6.5;

   $name = "Your Name";
   $cost_of_candy = $costPerPack;




?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>

  <div>
    <h3>Hello, <?php echo $name ?> </h3>
    <p> The the cost of candy per pack <?php echo number_format($cost_of_candy, 2) ?></p>
  </div>

</body>

</html>