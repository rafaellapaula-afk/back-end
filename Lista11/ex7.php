<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email == "rmello@gmail.com" && $senha == "rm87654"){
    echo "Login, bem sucedido!";
}else{
    echo "Login ou senha invalidos!";
}
?>