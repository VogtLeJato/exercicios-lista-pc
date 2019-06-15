<?php
$cel = 0;
$far = 0;

function converter($far){
    $cel = ($far - 32)*5/9;
    return $cel;
}

echo"digite a temperatura e fahrenheigt";

$resultado = converter(fgets(STDIN));

echo"a temperatura em celcius é $resultado";

