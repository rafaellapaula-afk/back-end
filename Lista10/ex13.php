<?php
declare(strict_types=1);

// 1. Simulação do recebimento dinâmico e higienização imediata dos dados
$nomeBruto = $_POST['nome'] ?? "Nicolas Dante";

// 2. Remoção de espaços em branco no início e no fim da string
$nomeTratado = trim((string) $nomeBruto);

// 3. Validação rigorosa (não aceita strings vazias ou com menos de 2 caracteres
if (!empty($nomeTratado) && mb_strlen($nomeTratado) >= 2) {

    // 4. Snitização contra ataques de Injeção de Código (XSS)
    $nomeSeguro = htmlspecialchars($nomeTratado, ENT_QUOTES, 'UTF-8');

    echo "Nome: <strong>{$nomeSeguro}</strong>";
} else {
    echo "Por favor, preencha o seu nome corretamente.";
}
?>