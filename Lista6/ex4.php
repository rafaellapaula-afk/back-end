<?php

echo "Bem vindo ao Pizza Plaza <br>";
echo "Menu: <br>";
echo "1 - Pizza <br>, 2 - Hambúrguer <br>, 3 - Refrigerante <br>, 4 - Sobremesa <br>, 5 - Sair <br>";

$opcao = 2;

switch($opcao){
    case 1:
        echo "Pizza de strogonoff";
        break;
    case 2:
        echo "Hambúrguer de cheddar";
        break;
    case 3:
        echo "Coca-Cola";
        break;
    case 4:
        echo "Gelato de chocolate";
        break;
    default:
    echo "Opção inválida!";
    break;
}
?>