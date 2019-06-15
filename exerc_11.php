<?php
function conversão ($pol)
{$cm= $pol*2.54;

    return $cm;}
print "Digite as polegadas para a conversão: ";
$pol= (float) fgets(STDIN);

$cm = conversão($pol);

if($pol<0){
    print"Digite um valor válido";
}

if($cm>0 or $cm==0){
    print"$pol pol, equivale a $cm cm";
}