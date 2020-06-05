<?php

    function almost() {
        
      for ($i = 1; $i < 15; $i++) {
        echo 'On y est presque' . chr(10);
      }
        
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>

<body>

    <h1>Exercice 5</h1>
    <p>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</p>
    <p><?= almost() ?></p>

</body>

</html>