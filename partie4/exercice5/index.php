<?php
$numbers = 0;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
    <?php
    while($numbers < 300){
      $numbers = $numbers + 1;
      if($numbers % 2 == 1){
    ?>
      <p><?= $numbers;?></p>
    <?php } } ?>
  </body>
</html>
