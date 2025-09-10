<?php
$nota = 8; // teste mudando o valor (0 a 10)
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado do Aluno</title>
</head>
<body>
    <?php if ($nota >= 7): ?>
        <p>Aluno aprovado ✅</p>
    <?php else: ?>
        <p>Aluno reprovado ❌</p>
    <?php endif; ?>
</body>
</html>
