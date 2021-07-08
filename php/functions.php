<?php

$suma = sumar(1, 2);
echo "El resultado es $suma\n";

function sumar($a, $b) {
    return $a + $b;
}

function sumar2(int $a, int $b) {
    return $a + $b;
}

$arrowSum = function ($a, $b) {
    return $a + $b;
};

$arrowSum1 = fn($a, $b) => $a + $b;
$arrowSum2 = $arrowSum1;

$resultado = $arrowSum2(1, 8);
echo "El resultado de la $resultado";