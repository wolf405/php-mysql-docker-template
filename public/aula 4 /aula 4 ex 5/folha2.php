<?php
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cadastro</title>
</head>
<body>
    <h2>Cadastro realizado!</h2>
    <p>Nome: <?= htmlspecialchars($nome) ?></p>
    <p>E-mail: <?= htmlspecialchars($email) ?></p>
</body>
</html>
