<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les boucles exercice 4</title>
  </head>
  <body>
    <!-- Commentaire -->
    <?php
$number = 1;
while($number < 10){
  echo '<p>' .$number. '</p>';
  $number += $number/2;
  // $number = $number + $number/2;
}
     ?>
  </body>
</html>
