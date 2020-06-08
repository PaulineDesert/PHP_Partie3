<?php

    function multiplicateNumbers() {
        $firstNumber = 100;
        $secondNumber = 1;

        while ($firstNumber >= 10) {
            $firstNumber-- * $secondNumber;
            echo $firstNumber . chr(10);
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>

<body>

    <h1>Exercice 3</h1>
    <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.</p>
    <p>Tant que la première variable n'est pas inférieure ou égale à 10 :</p>
    <p>- multiplier la première variable avec la deuxième</p>
    <p>- afficher le résultat</p>
    <p>- décrémenter la première variable</p>
    <p><?= multiplicateNumbers() ?></p>

</body>

</html>