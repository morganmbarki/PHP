<?php

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
    <?php
    function number($a = 12, $b = -56){
    if ($a > $b) {
      return ('Le premier nombre est plus grand');
    }elseif ($a < $b) {
      return ('Le premier nombre est plus petit');
    }else{
      return ('Les deux nombres sont identiques');
    }
    };
     echo number();
    ?>
  </body>
</html>
