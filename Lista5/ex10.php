<?php

$peso = "45kg";
$altura = 1.60;
$resultado = $peso / ($altura*$altura);

echo "Seu IMC é $resultado <br> ";

if($resultado >= "18kg" && $resultado <= "24kg"){
    echo "Peso ideal";
}
else if($resultado >= "25kg" && $resultado <= "29kg"){
    echo "Sobrepeso";
}
else if($resultado >= "30kg" && $resultado <= "34kg"){
    echo "Obesidade grau 1";
}
else if($resultado >= "35kg" && $resultado <= "39kg"){
    echo "Obesidade grau 2";
}
else if($resultado >= "40kg"){
    echo "Obesidade grau 3";
}
else {
    echo "Algo está errado, consulte um médico!";
}
?>