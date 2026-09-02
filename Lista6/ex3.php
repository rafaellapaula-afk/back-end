<?php

echo "Caixa Eletrônico - Itaú <br>";
echo "1 - Consulta saldo, 2 - Fazer Saque, 3 - Fazer Depósito, 4 - Ver Extrato, 5 - Sair <br>";


$opcao = 3;

switch($opcao){
    case 1:
        echo "Seu saldo é R$ 650, 81";
        break;
    case 2:
        echo "Qual o valor do saque?";
        break;
    case 3:
        echo "Onde quer depositar?";
        break;
    case 4:
        echo "Ver extrato bamcário";
        break;
    case 5:
        echo "Clique para sair";
        break;
    default:
    echo "Opção invalida";
    break;
     
}
?>