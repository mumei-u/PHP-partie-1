<?php
$exerciseNb = 3;
include '../header.php';
$km = 1;
?>
<p>
  <?= $km ?> kilomètre.
</p>
<?php
$km = $km * 3;
?>
<p>
  Changer sa valeur par <?= $km ?> kilomètres.
</p>
<?php
$km = $km + 122;
?>
<p>
  Changer sa valeur par <?= $km ?> kilomètres.
</p>
<?php include '../footer.php'; ?>
