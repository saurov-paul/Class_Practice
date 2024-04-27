<?php
/* Write your code here */

$price = 1.99;
$candy_pack = 5;
$counter = 1;
$total = 0;
while ($counter <= $candy_pack) {
 $total += $price ; $counter++;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    /* Write your code here */
    echo "Total Price of 5 Pack = $total€";

    ?>
  </p>
</body>

</html>