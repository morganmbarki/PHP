<!-- le php pour ce qui n'est pas de l'affichage -->
<?php
// déclaration des variables (les noms que l'on veux)
$number = '140';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
    <!-- le php pour l'affichage -->
    <p>
      <?php
      echo ($number + 30) / 2
      ?>
    </p>
  </body>
</html>
