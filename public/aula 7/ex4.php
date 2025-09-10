<?php
$notas = [
    "Ana" => 9.0,
    "Bruno" => 6.5,
    "Carlos" => 7.5,
    "Daniela" => 5.0,
    "Eduardo" => 8.2
];

$total = 0;

echo "<h2>Notas dos Alunos</h2>";

foreach ($notas as $aluno => $nota) {
    $total += $nota;

    if ($nota >= 7) {
        echo "<p style='color: blue;'>$aluno - Nota: $nota - APROVADO</p>";
    } else {
        echo "<p style='color: red;'>$aluno - Nota: $nota - REPROVADO</p>";
    }
}

$media = $total / count($notas);

echo "<hr>";
echo "<strong>Média da Turma: " . number_format($media, 2, ',', '.') . "</strong>";
?>
