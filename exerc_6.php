
<?php
$num1 = 0;
$num2 = 0;
$numeros = 0;

function conjunto($num1,$num2){
    $n1 = $num1;
    $n2 = $num2;

    if($n1 < $n2){

while($n1 < $n2){
    $n1++;
    $numeros = $n1 + $numeros;

}
    }

    if($n1 > $n2){

        while($n1 > $n2){
            $n2++;
            $numeros = $numeros + $n2;
            
        }
            }

return $numeros;
}
echo"digite o primeiro numero";
$numero1 = (int)fgets(STDIN);

echo"digite o segundo numero";
$numero2 = (int)fgets(STDIN);

$resultado = conjunto($numero1,$numero2);
print_r($resultado);