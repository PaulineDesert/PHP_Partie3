<?php

    function numbers() {
      
      $number = 1;

      while ($number < 10) {
        $number = $number + ($number / 2);
        echo $number . chr(10);
      }
        
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>

    <h1>Exercice 4</h1>
    <p>Créer une variable et l'initialiser à 1.</p>
    <p>Tant que cette variable n'atteint pas 10, il faut :</p>
    <p>- l'afficher</p>
    <p>- l'incrementer de la moitié de sa valeur</p>
    <p><?= numbers() ?></p>

</body>

</html>