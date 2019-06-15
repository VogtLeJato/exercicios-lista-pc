<?php

function semana($num){

    



    

    if($num>0 and $num<8){

       $semana = array('blá','DOM','SEG','TER','QUA','QUI','SEX','SAB');

         print($semana[$num]) . " é o dia correspondente";}


   
     
    else{
        echo"Digite um numero valido";
    }
}

  

    


echo"Digite um numero e eu direi o dia da semana correspondente\n";

$num = (int)fgets(STDIN);

semana($num);




