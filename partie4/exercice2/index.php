<?php
function name($coucou = 'hello', $grr = 'Morgan')
{
  return $coucou . 'Mr' . $grr;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
    <?php
    echo name();
    ?>
  </body>
</html>
