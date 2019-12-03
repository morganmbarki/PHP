<!-- le php pour ce qui n'est pas de l'affichage -->
<?php
// déclaration des variables (les noms que l'on veux)
$lastname = 'Mbarki';
$firstname = 'Morgan';
$age = 24;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>exercice 2</title>
  </head>
  <body>
    <!-- le php pour l'affichage -->
    <p>
      <!-- la version du dessous est la meme que celle du dessus, c'est une sorte de raccourci pour echo -->
      <?= $lastname. ' '. $firstname. ' '. $age;?>
    </p>
  </body>
</html>
