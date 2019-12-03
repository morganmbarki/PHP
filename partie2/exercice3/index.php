<?php
$gender = 'Homme';
?>
<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Partie2</title>
  </head>
  <body>
    <?php
    if($gender != 'Homme'){
      echo 'C\'est une developpeurse';
    }else {
      echo 'C\'est un developpeur';
    }
    ?>
  </body>
</html>
