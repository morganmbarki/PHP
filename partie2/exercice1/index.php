<?php
$age = 17;
$majeur = 'Vous êtes majeur';
$mineur = 'Vous êtes mineur';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Partie 1</title>
  </head>
  <body>
    <?php
    if($age >= 18){
      echo $majeur;
    }else{
      echo $mineur;
    }
    ?>
  </body>
</html>
