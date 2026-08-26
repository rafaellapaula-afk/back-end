<?php

$nota1 = 7;
$nota2 = 4;
$frequencia = 80;

$media = ($nota1 + $nota2)/2;

if($media >=6 && $frequencia>= 75){
    echo "Aprovado :)";
}elseif($media >= 4 && $frequencia>= 75){
    echo "Em recuperação :/";
}else{
    echo "Reprovado :(";
}


?>