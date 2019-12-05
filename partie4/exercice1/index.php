<?php
//Déclaration de la fonction retournant une chaîne de caractères passée en paramètre
function returnString($string1){
  return $string;
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 4 exercice 1</title>
  </head>
  <body>
    <h1>Exercice 1</h1>
    <div>
      <h2>Solution 1</h2>
      <p>
        <?php
        //On appelle de la fonction returnString() et on donne une valeur à son paramètre (aucun affichage)
        returnString('Hello !');
        ?>
      </p>
    </div>
    <div>
      <h2>Solution 2</h2>
      <p>
        <?php
        //On stocke ce qui a été retourné par la fonction returnString() dans une variable $resultReturned
        $resultReturned = returnString('Bonjour');
        //On affiche ce qui a été retourné par la fonction
        echo $resultReturned;
        ?>
      </p>
    </div>
    <div>
      <h2>Solution 3</h2>
      <p>
        <?php
        //On affiche directement ce qui a été retourné par la fonction sans stocker le résultat dans une variable intermédiaire
        echo returnString('Hello world !');
        ?>
      </p>
      <p><?= returnString('Hello world !'); ?></p>
    </div>
  </body>
</html>
