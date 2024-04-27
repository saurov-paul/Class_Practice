<?php
// Write your code here
$items =["notebook", "pencile", "eraser"];
$new_item= "scissors";
array_unshift($items, $new_item);
$items_text= implode (",", $items);


?>
<?php include 'includes/header.php'; ?>

<h1>Order</h1>


<?= $items_text ?>

<?php include 'includes/footer.php'; ?>