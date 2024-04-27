<?php

/* 
  Write you php code here

   */

   $nutrition = [
    "fat" => 15,
    "sugar" => 75,
    "salt" => 10,
   ];

   $nutrition = [ 
    "fat" => 11,
    "fiber" => 9,]
?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <ul>
    <li>Fat : <?php echo ($nutrition['fat'] / 100) * 100 . "%"; ?></li>
    <li>Fiber : <?php echo ($nutrition['fiber'] / 100) * 100 . "%"; ?></li>
  </ul>
  <p></p>

</body>

</html>