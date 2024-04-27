<?php
/* Write your code here */
$candy_stock = 0;

if ($candy_stock > 15){
    $message = "Good availability";
}elseif ( $candy_stock < 10 && $candy_stock > 0){
    $message = "low stock ";
}elseif ($candy_stock <= 0){
     $message = "Out of stock";
}else{
    $message = "The order is out of our limit ";
}
?>


<h2>Chocolate</h2>
<?php
/* Write your code here */
require_once "includes/header.php";
?>
<P><?php
echo $message;
?>
</P>

<?php
/* Write your code here */
require_once "includes/footer.php";
?>