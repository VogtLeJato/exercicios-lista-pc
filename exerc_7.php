<?php

function meses($num){

    



    

    if($num>0 and $num<13){

       $meses = array('blá','janeiro','fevereiro','março','abril','maio','junho','julho','agosto','setembro','outubro','novembro','dezembro');

         print($meses[$num]);}


   
     
    else{
        echo"Digite um numero valido";
    }
}

  

    


echo"Digite um numero e eu direi o mês correspondente\n";

$num = (int)fgets(STDIN);

print" é o mês correspondente" . meses($num);
