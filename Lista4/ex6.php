<?php

$idade = 53;
$deficiencia = false;
$gestante = false;

if($idade >= 60 || $deficiencia == true || $gestante == true){
    echo "Atendimento prioritário!";
}
else{
    echo "Atendimento normal";
}
?>