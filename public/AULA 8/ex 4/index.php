<?php
$nome = "João"; // variável global

function mostrarNome() {
    // echo $nome; // ERRO: não acessa variável global direto
    global $nome; // necessário para usar a variável global
    echo "Nome: $nome";
}

mostrarNome();
?>
