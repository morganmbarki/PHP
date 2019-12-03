<?php
$age = 24;
$gender = 'homme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Partie 2</title>
  </head>
  <body>
    <?php
    // if($age >= 18){
    //   echo 'Vous êtes un ' . $gender . ' et vous êtes majeur';
    // }else{
    //   echo 'Vous êtes un ' . $gender . 'et vous êtes mineur';
    // }

    // if($age >= 18 And $gender == 'homme' Or $gender == 'femme'){
    //   echo 'Vous êtes un ' . $gender . ' et vous êtes majeur';
    // }elseif($gender !== 'homme' Or $gender !== 'femme'){
    //   echo 'Vous êtes quoi ????';
    // }else{
    //   echo 'Vous êtes un ' . $gender . 'et vous êtes mineur';
    // }

    if($age >= 18 And $gender == 'homme' Or $gender == 'femme'){
      echo 'Vous êtes un ' . $gender . ' et vous êtes majeur';
    }elseif($age <= 17 And $gender == 'homme' Or $gender == 'femme'){
      echo 'Vous êtes un ' . $gender . ' et vous êtes mineur';
    }else{
      echo 'Vous êtes quoi ????';
    }

    ?>
  </body>
</html>
