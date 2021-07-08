<?php
$string = "text";
echo $string;
$string = 10;
echo $string."\n";

$array = array(1, 2.213412424, "41", false, null);

$arregloAsosiativo = array(
    'nombre' => "Antonio",
    'Apellido' => "Reyna"
);

//Da Error (pero se imprime al final veda)
//echo $array."\n";

echo var_dump($array);

echo $arregloAsosiativo['nombre'];
echo var_dump($arregloAsosiativo);

echo "\n";

class Car {
    var string $company;
    var int $year;
    var array $wheels;
    var Car $submodel;
    var bool $booleano;
    var float $decimal;
}