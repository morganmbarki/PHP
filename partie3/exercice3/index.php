<?php
$months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Partie 1</title>
  </head>
  <body>
    <?php
    /*Pour chaque éléments du tableau months on affiche ses éléments
    La boucle foreach est plus adaptée pour les tableaux */
    foreach ($months as $month) {
    ?>
      <p><?= $month; ?></p>
    <?php }; ?>
  </body>
</html>
