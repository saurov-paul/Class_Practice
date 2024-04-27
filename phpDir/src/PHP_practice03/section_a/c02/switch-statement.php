<?php
/* Write your code here */
$current_day  = "";
$message = "Buy three packs, get one free";

switch($current_day){
  case "monday":
    $message = "get 20% off chocolates";
  break;
  case "Tuesday":
    $message = "get 20% off mints";
    break;
    default:
    $message;
    break;
}


?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  
  <p> <?php
  /* Write your code here */
  echo $message
  ?></p>
</body>

</html>