<?php 

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$servico = [1, 2, 3, 4];

echo "Seu nome é: ", $nome, "<br>", "Sua idade é: ", $idade;


if($servico > 4) {
    echo "Serviço não encontrado";
}
else {
    echo "Marcado com sucesso!"
}

?>