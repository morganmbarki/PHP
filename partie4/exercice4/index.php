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
    function infos($lastname = 'MBARKI', $firstname = 'Morgan', $age = 24){
    return 'Bonjour ' . $lastname . ' ' . $firstname . ', tu as ' . $age . 'ans';
    }
    echo infos();
    ?>
  </body>
</html>
