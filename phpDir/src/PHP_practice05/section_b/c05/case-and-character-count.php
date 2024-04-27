<?php
$text = 'Home sweet home';
$lowercase = strtolower($text);
$uppercase = strtoupper($text);
$countCharacter = strlen($text);
$wordCount = str_word_count($text);

?>
<?php include 'includes/header.php'; ?>

<p>
  <?= $lowercase ?> <br>
  <?= $uppercase ?> <br>
  <?= $countCharacter ?> <br>
  <?= $wordCount ?>
</p>

<?php include 'includes/footer.php'; ?>