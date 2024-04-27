<?php

/* 
  Write you php code here

   */

   $offer = [
    ["name" => "KitKat",
    "price" => 3.50,
    "stock" => 450],

    ["name" => "Baboul gam",
    "price" => 2.50,
    "stock" => 720],

    ["name" => "choko",
    "price" => 2.90,
    "stock" => 590],
   ];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>
  <p> <?php  

foreach ($offer as $candy){
  foreach($candy as $key =>$value ){
    echo "$key. : $value <br>";
  }
}?></p>

</body>

</html>