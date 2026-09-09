<?php

$musicas = ["GGWP", "Euforia", "Love In a Bottle", "Boitata", "Casca de Metal", "Face do Desespero"];

echo "Músicas mais ouvidas na palylist<br>";
foreach ($musicas as $num) {
    echo "$num <br>";
}
$qtd = count ($musicas);

echo "<br>Quantidade de músicas: ", $qtd;
?>