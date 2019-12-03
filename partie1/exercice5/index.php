<!-- le php pour ce qui n'est pas de l'affichage -->
<?php
// déclaration des variables (les noms que l'on veux)
$answer = 'fdsgdsfgdfgfdg';
$yes = 'Vous avez répondu oui';
$no = 'Vous avez répondu non';
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
      if($answer == 'yes'){
        echo $yes;
      }else{
        if($answer == 'no'){
          echo $no;
        }else{
          echo 'Fait ce qui est demandé !';
        }
      }
      ?>
    </p>
  </body>
</html>
