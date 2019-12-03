<!-- le php pour ce qui n'est pas de l'affichage -->
<?php
// déclaration des variables (les noms que l'on veux)
$name = 'Morgan';
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
      Bonjour
      <?= $name; ?>
      , comment vas tu ?
    </p>
  </body>
</html>
