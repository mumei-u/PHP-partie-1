<?php
$exerciseNb = 4;
include '../header.php';
  $string = 'Salut';
  $int = 20;
  $float = 0.18;
  $boolean = true;
?>
<p>
  <?= $string.', mon nombre entier vaut '.$int.', mon nombre décimal vaut '.$float.' et mon booléan est '.$boolean.'.'?>
</p>
<?php include '../footer.php'; ?>
