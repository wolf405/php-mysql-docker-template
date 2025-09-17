<?php
// ==============================
// 1. Função simples
// ==============================
function meuNome() {
    echo "Guilherme da Silva<br>";
}

// Chamando 3 vezes
meuNome();
meuNome();
meuNome();

echo "<hr>";

// ==============================
// 2. Parâmetro único
// ==============================
function saudacao($nome) {
    echo "Olá, $nome!<br>";
}

saudacao("Gabriela");
saudacao("João");
saudacao("Maria");

echo "<hr>";

// ==============================
// 3. Dois parâmetros
// ==============================
function soma($a, $b) {
    echo "A soma de $a + $b é: " . ($a + $b) . "<br>";
}

soma(5, 10);
soma(7, 3);

// Versão que retorna o valor
function somaRetorna($a, $b) {
    return $a + $b;
}

$resultado = somaRetorna(8, 12);
echo "A soma retornada é: $resultado<br>";

echo "<hr>";

// ==============================
// 4. Retorno de valor
// ==============================
function calcularMedia($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3;
}

$media = calcularMedia(7, 8, 9);
echo "A média do aluno é: $media<br>";

echo "<hr>";

// ==============================
// 5. Escopo de variáveis
// ==============================
$curso = "PHP";

// Isso não vai funcionar sem 'global'
function mostrarCurso() {
    // echo $curso; // ERRO: variável não definida no escopo local

    global $curso; // agora a função pode acessar a variável global
    echo "Curso atual: $curso<br>";
}

mostrarCurso();

echo "<hr>";

// ==============================
// 6. Desafio prático
// ==============================
function calcularMediaDesafio($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3;
}

function verificarSituacao($media) {
    if ($media >= 7) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}

// Testando com 2 alunos
$mediaAluno1 = calcularMediaDesafio(8, 7, 9);
echo "Aluno 1 - Média: $mediaAluno1 - Situação: " . verificarSituacao($mediaAluno1) . "<br>";

$mediaAluno2 = calcularMediaDesafio(5, 6, 4);
echo "Aluno 2 - Média: $mediaAluno2 - Situação: " . verificarSituacao($mediaAluno2) . "<br>";

?>
