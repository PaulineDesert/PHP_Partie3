<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <p>Créer une variable age et l'initialiser à 0.</p>
    <p>Tant que cette variable n'atteint pas 10, il faut :</p>
    <p>- l'afficher</p>
    <p>- l'incrementer</p>
    
    <?php

    $age;

    for ($age = 0; $age <= 10; $age++) { ?>

    <p><?= $age ?>
    
    <?php } ?>
</body>
</html>