<?php

$nota1 = 0;
$nota2 = 0;

 function mediaa($nota1,$nota2){

    $media = ($nota1 + $nota2)/2;

    if($media > 6 or $media == 6){
       print"PARABENS, situação: aprovado";
    }
   
    else{
        print"reprovado";
    }
    

 }

 print"de a primeira nota";
 $n1 = fgets(STDIN);
 
 print"de a segunda nota";
 $n2 = fgets(STDIN);

 mediaa($n1 , $n2);