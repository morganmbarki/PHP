<!-- le php pour ce qui n'est pas de l'affichage -->
<?php
// déclaration des variables (les noms que l'on veux)
$object = 'Objet du message';
$message = 'Contenu du message';
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
      <?php echo $object; ?>
    </p>
    <p>
      <!-- la version du dessous est la meme que celle du dessus, c'est une sorte de raccourci pour echo -->
      <?= $message; ?>
    </p>
  </body>
</html>
