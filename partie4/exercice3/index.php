<?php
//Création d'une fonction avec 2 paramètres qui compare ici $number1 à $number2
function compare($number1, $number2){
  //Comparaison des deux nombres et stockage en fonction de la condition
  if ($number1 > $number2) {
    $result = 'Le premier nombre est plus grand';
  }elseif ($number1 < $number2) {
    $result = 'Le premier nombre est plus petit';
  }else{
    $result = 'Les deux nombres sont identiques';
  }
  //Le return permet de renvoyer la réponse à qui en fait la demande
  return $result;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p>
      <?php
      //Création d'une nouvelle variable pour paramétrer notre fonction
      $resultIs = compare(5,5);
      //affichage de notre résultat en utilsant la variable dernierement nommée
      echo $resultIs;
      ?>
  </p>
  </body>
</html>
