<?php

$var = 'Antonio';
//String 1
$stringComillasSimples = 'Hola $var\nsoy un\tString';
//Literalmente el String 1 pero con comillas dobles
$stringComillasDobles = "Hola $var\nsoy un\t string";

echo $stringComillasSimples;
echo "\n-------------------\n";
echo $stringComillasDobles;

echo "\n\n-------------------\n";
$nombre = "Antonio";
//Da error este pedo
echo "Hola $nombreoooooo";
//pero esto no
echo "Hola ${nombre}oooooo";
