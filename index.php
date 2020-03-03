<?php
$x = 24;
$y = 2;

$soucet = $x + $y;
$rozdil = $x - $y;
$soucin = $x * $y;





    if ($y != 0) {
         $podil = $x / $y;
    } else {
        $podil = "nelze dělit nulou";
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
A= <?= $x ?>
<p>B= <?= $y ?></p>
<p>Součet: <?= $x ?> + <?= $y ?> = <?= $soucet ?></p>

<p>Rozdíl: <?= $x ?> - <?= $y ?> = <?= $rozdil ?></p>

<p>Součin: <?= $x ?> x <?= $y ?> = <?= $soucin ?></p>

<p>Podíl: <?= $x ?> : <?= $y ?> = <?= $podil ?></p>

</body>
</html>