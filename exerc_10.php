<?php
function maior ($numero1, $numero2)
{
    $maior[0]=$numero1;
    $maior[1]=$numero2;
    rsort($maior);
    if($numero1 != $numero2){
    print "O maior número foi o: $maior[0]";}
    else{print"os valores são iguais";}
}
print "Digite o número 1: ";
$numero1= (float) fgets(STDIN);
print "Digite o número 2: ";
$numero2= (float) fgets(STDIN);
maior ($numero1, $numero2);