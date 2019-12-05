<?php
$numbers = 0;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
    <?php
    //while siginfie "tant que", ici tant que la condition n'est pas atteinte on execute les instructions en boucle
    while($numbers < 300){
      $numbers = $numbers + 1;
      // la ligne du dessus peut aussi s'écrire $numbers++
      // Cette condition permet d'obtenir uniquement les nombres impairs
      if($numbers % 2 == 1){
    ?>
      <p><?= $numbers;?></p>
    <?php
      }
    }
    ?>
    <?php
    /*Cette boucle est à privilegier;
    premier $i = point de depart, le deuxieme = point d'arrivée et le dernier = incrementation*/
    for ($i=0; $i <= 300; $i++) {
      if ($i % 2 == 1) { ?>
        <p><?php echo $i; ?></p>
    <?php
      }
    }
    ?>
  </body>
</html>
