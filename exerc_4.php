<?php
$altura = 0;
$sexo = 0;

function pesoideal($altura,$sexo){
    if($sexo != 1 or $sexo != 2){
        $pesobom = "insira um numero válido em sexo";
    }

    if($sexo == 1){
        $pesobom = (72.7*$altura) - 58 ;
    }

    if($sexo == 2){
        $pesobom = (62*$altura) - 44.7;
    }
    return $pesobom;
}
print"escreva a altura";
$altura = fgets(STDIN);

print"escreva o numero correspondente ao sexo";
$sexo = fgets(STDIN);

$pesobom = pesoideal($altura, $sexo);


print"o peso ideal para essa pessoa é de $pesobom kg";