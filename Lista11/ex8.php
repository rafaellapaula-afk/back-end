<?php
$quilo = $_POST ['quilo'];

if($quilo >= 50){
    echo "Você deve pagar uma multa de: ", ($quilo - 50) * 4;
}else{
    echo "Você não deve nenhuma multa";
}
?>