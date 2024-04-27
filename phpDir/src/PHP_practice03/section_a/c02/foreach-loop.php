<?php
/* 
    Write your code here
     */
    $price = 1.99;
    $pack = 5;
    $counter = 1;

    $total = 0;

    while ($counter <= $pack) {
      $total += $price; $counter++;
    }
?>
<!DOCTYPE html>
<html>

<head>
  <title>foreach Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Price List</h2>
  <table>
    <tr>
      <th>Item</th>
      <th>Price</th>
    </tr>
    <?php
    /* 
    Write your code here
     */
    ?>
  </table>
</body>

</html>