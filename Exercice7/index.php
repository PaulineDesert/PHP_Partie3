<?php

    function isGood() {
        
      for ($i = 1; $i <= 100; $i+=15) {
        echo 'On tient le bon bout.' . chr(10);
      }
        
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>

<body>

    <h1>Exercice 7</h1>
    <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
    <p><?= isGood() ?></p>

</body>

</html>