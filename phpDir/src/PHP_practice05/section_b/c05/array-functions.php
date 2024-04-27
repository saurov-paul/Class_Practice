<?php
$greetings = [ "Hi,", "Howdy,", "Hello,", "Hola,", "Cia,", "Moi,", "Namaste,", "Welcome,"];
$greeting = $greetings[array_rand($greetings)];

$best_seller = ["notebook", "pencile", "ink"];
$best_seller_count = count($best_seller);
$best_seller_text = implode (",", $best_seller);

$customers_name = ["alice", "kala", "Maik", "saruk", "mumom"];

$customers = ["firstname" => "alice", "lastname" => "jon", "email" => "alice@gmail.com"];

$customer_greeting = $greeting.$customers_name[array_rand($customers_name)];


?>

<?php include 'includes/header.php'; ?>


<?= $greeting ?> <br>

<h1>Best Sellers</h1>
<h3>Items :- <?=  $best_seller_text ?> <br></h3>

<h3>Counter :- <?= $best_seller_count ?> <br></h3>

<h3>Customers greeting :- <?= $customer_greeting ?> <br></h3>





<?php include 'includes/footer.php'; ?>