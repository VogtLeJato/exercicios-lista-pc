<?php
$cat_2 = 0;
$cat_1 = 0;

function hipotenusa($cat_1, $cat_2){
    $hip = sqrt(($cat_1**2) + ($cat_2**2));
    return $hip;
}

print"digite o valor do primeiro cateto";

$valor1 = fgets(STDIN);

print"digite o valor do segundo cateto";

$valor2 = fgets(STDIN);

$resultado = hipotenusa($valor1 , $valor2);

print"$resultado";


