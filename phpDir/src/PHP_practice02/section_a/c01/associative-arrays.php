<?php

/* 
  Write you php code here

   */

   $nutrition = [
    "fat" => 15,
    "sugar" => 75,
    "salt" => 10,
   ];

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
        <li>Fat: <?php echo ($nutrition['fat'] / 100) * 100 . "%"; ?></li>
        <li>Sugar: <?php echo ($nutrition['sugar'] / 100) * 100 . "%"; ?></li>
        <li>Salt: <?php echo ($nutrition['salt'] / 100) * 100 . "%"; ?></li>
    </ul>

</body>

</html>