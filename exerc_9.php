<?php

function divisao($x,$y){
    if($x % $y == 0){
        return 1;
    }

    else{
        return 0;
        
    }
  
}

print"Digite dois numeros e veja se o primeiro é divisivel pelo segundo\n";

$resultado = divisao(fgets(STDIN),fgets(STDIN));

if($resultado == 1){
    print"é divisivel";
}
 
if($resultado== 0){
    print"não é divisivel";
}
