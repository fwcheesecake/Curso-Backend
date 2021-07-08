<?php

//if
$valor1 = 10;
$valor2 = "10";

echo $valor1 == $valor2;

echo "\n";

//No funca esto wtf dude
echo $valor1 === $valor2;

echo "\n";

if($valor1 === $valor2)
    echo "callese el osico";
else
    echo "k wea wn";

echo "\n";

echo "True: ".true;
echo "\nFalse: ".false;

echo "\n";

//for
for($i = 0; $i < 10; $i++)
    echo "Soy $i\n";

//foreach
$array = array(
    'v1' => 2,
    'v2' => 'Xd',
    'v3' => true,
    'v4' => 4124.421,
    'v5' => null
);

foreach ($array as $value) {
    echo $value."\t";
}

foreach ($array as $key => $item) {
    echo "$key => $item\n";
}

echo "False = Null??? "; echo false == null;

//while

$a = 0;
while($a < 10) {
    $a++;
    echo "$a\t";
}

echo "\n";

//dowhile
do {
    $a++;
    echo "$a\t";
} while($a < 10);
