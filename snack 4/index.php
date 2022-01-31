<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$randomNumber = [];


while (count($randomNumber) < 15) {
    $random = rand(1, 30);
    if (!in_array($random, $randomNumber)) {
        $randomNumber[] = $random;
    }
}

echo "<pre>";
var_dump($randomNumber);
"</pre>";

?>