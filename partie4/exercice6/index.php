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
    while($numbers < 100){
      $numbers = $numbers + 1;
      if($numbers % 3 == 0 && $numbers % 5 == 0){
    ?>
    <p><?= 'FizzBuzz'; ?></p>
    <?php }elseif($numbers % 3 == 0){ ?>
        <p><?= 'Fizz'; ?></p>
      <?php }elseif($numbers % 5 == 0){ ?>
        <p><?= 'Buzz'; ?></p>
      <?php }else{ ?>
        <p><?= $numbers; ?></p>
    <?php }
  } ?>
  </body>
</html>
