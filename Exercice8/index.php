<?php

    function finalyMessage() {
        
      for ($i = 200; $i >= 0; $i-=12) {
        echo 'Enfin !!!' . chr(10);
      }
        
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>

<body>

    <h1>Exercice 8</h1>
    <p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
    <p><?= finalyMessage() ?></p>

</body>

</html>