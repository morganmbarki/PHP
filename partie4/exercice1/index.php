<?php
$name = 'Morgan'
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
    <?php
    function name($coucou)
    {
        return $coucou;
    }
    echo name('Bonjour' . $name);
    ?>
  </body>
</html>
