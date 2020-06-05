<?php

    function isGood() {
        
      for ($i = 20; $i > 0; $i--) {
        echo 'C\'est presque bon' . chr(10);
      }
        
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>

<body>

    <h1>Exercice 6</h1>
    <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
    <p><?= isGood() ?></p>

</body>

</html>