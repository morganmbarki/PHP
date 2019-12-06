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
        //Si un nombre est multiple de 3 et de 5 il est forcement un multiple de 15 donc possibilité d'écrire $numbers % 15 == 0
    ?>
        <p>FizzBuzz</p>
        <!-- Tout ce qui est divisé par 3 et dont il reste 0 sera forcement un multiple de 3 -->
      <?php }elseif($numbers % 3 == 0){ ?>
        <p>Fizz</p>
        <!-- Tout ce qui est divisé par 5 et dont il reste 0 sera forcement un multiple de 5 -->
      <?php }elseif($numbers % 5 == 0){ ?>
        <p>Buzz</p>
      <?php }else{ ?>
        <!-- Ici ma variable else affichera donc que les nombres qui sont ni multiple de 3 ni de 5 -->
        <p><?= $numbers; ?></p>
    <?php
      }
    }
    ?>
    <?php
    //Avec la boucle for
    for ($number=1; $number <= 100; $number++) {
      if($number % 3 == 0 && $number % 5 == 0){
    ?>
      <p>FizzBuzz</p>
    <?php }elseif($number % 3 == 0){ ?>
        <p>Fizz</p>
      <?php }elseif($number % 5 == 0){ ?>
        <p>Buzz</p>
      <?php }else{ ?>
        <p><?= $number; ?></p>
  <?php
      }
    }
  ?>
  <?php
  //boucle for avec que des if
  for ($numb=0; $numb <= 100; $numb++) {
    //Déclaration d'une variable vide
    $result = '';
    if ($numb % 3 == 0) {
      //Si $numb est un multiple de 3, afficher Fizz
      $result = 'Fizz';
    }
    if ($numb % 5 == 0){
      /*Si $numb est un multiple de 5, afficher en concatenation de result + Buzz si result est un multiple de 3
      il aura comme valeur FizzBuzz*/
      $result = $result . 'Buzz';
    }
    //ni multiple de 3 ou de 5 result aura la valeur du nombre de la variable $numb
    if ($result == '') {
      $result = $numb;
    }
  ?>
    <!-- affichage du resultat -->
    <p><?php echo $result; ?></p>
  <?php } ?>
  </body>
</html>
