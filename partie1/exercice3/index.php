<!-- le php pour ce qui n'est pas de l'affichage -->
<?php
// déclaration des variables (les noms que l'on veux)
$km = 1;

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
      <!-- la version du dessous est la meme que celle du dessus, c'est une sorte de raccourci pour echo -->
      <?= $km; ?>
      <?= $km + 2; ?>
      <?= $km * -(-125)/2*2+5-7+2; ?>
    </p>
  </body>
</html>
