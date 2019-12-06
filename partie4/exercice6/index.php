<?php
//déclaration d'une variable contenant une valeur numérique (sert pour la boucle while)
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
    while($numbers < 100){
      //Incrementation de 1 en 1 avec opérateur d'incrementation '++'
      $numbers++;
      //Mettre la condition la plus "complete" en premier (sinon elle passe à la trape)
      if($numbers % 3 == 0 && $numbers % 5 == 0){
    ?>
        <p><?= 'FizzBuzz'; ?></p>
        <!-- Tout ce qui est deivisé par 3 et dont il reste 0 sera forcement un multiple de 3 -->
      <?php }elseif($numbers % 3 == 0){ ?>
        <p><?= 'Fizz'; ?></p>
        <!-- Tout ce qui est deivisé par 5 et dont il reste 0 sera forcement un multiple de 5 -->
      <?php }elseif($numbers % 5 == 0){ ?>
        <p><?= 'Buzz'; ?></p>
      <?php }else{ ?>
        <!-- Ici ma variable else affichera donc que les nombres qui sont ni multiple de 3 ni de 5 -->
        <p><?= $numbers; ?></p>
    <?php
      }
    }
    ?>
    <?php
    //Avec la boucle for
    for ($i=0; $i <= 100; $i++) {
      if($i % 3 == 0 && $i % 5 == 0){
    ?>
      <p><?= 'FizzBuzz'; ?></p>
    <?php }elseif($i % 3 == 0){ ?>
        <p><?= 'Fizz'; ?></p>
      <?php }elseif($i % 5 == 0){ ?>
        <p><?= 'Buzz'; ?></p>
      <?php }else{ ?>
        <p><?= $i; ?></p>
  <?php
      }
    }
  ?>
  </body>
</html>
