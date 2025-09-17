<?php
function saudacao($nome = "Visitante") {
    echo "Olá, $nome!<br>";
}

saudacao();         // Usa o valor padrão
saudacao("Marcos"); // Usa o valor enviado
?>
