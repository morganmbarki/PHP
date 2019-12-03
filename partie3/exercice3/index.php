<?php
$month = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Partie 1</title>
  </head>
  <body>
    <?php
    foreach ($month as $element) {
      echo $element . '<br/>';
    };
    ?>
  </body>
</html>
