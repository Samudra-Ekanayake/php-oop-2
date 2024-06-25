<?php

include __DIR__ . "/models/Prodotto.php";

$ford = new Prodotto("Ford", "Focus", "C");
$dacia = new Prodotto("Dacia", "Sandero", "B");
$fiat = new Prodotto("Fiat", "500", "A");

$auto = [$ford, $dacia, $fiat];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    foreach ($auto as $car) {
        echo "<p>" . $car->getDescrizione() . "</p>";
    }
    ?>

</body>

</html>