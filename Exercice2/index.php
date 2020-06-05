<?php

    function multiplicateNumbers() {
        $firstNumber = 0;
        $secondNumber = 2;
        while ($firstNumber <= 20) {
            $firstNumber = $firstNumber * $secondNumber;
            $firstNumber++;
            echo $firstNumber . chr(10);
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>

<body>

    <h1>Exercice 2</h1>
    <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.</p>
    <p>Tant que la première variable n'est pas supérieure à 20 :</p>
    <p>- multiplier la première variable avec la deuxième</p>
    <p>- afficher le résultat</p>
    <p>- incrementer la première variable</p>
    <p><?= multiplicateNumbers() ?></p>

</body>

</html>