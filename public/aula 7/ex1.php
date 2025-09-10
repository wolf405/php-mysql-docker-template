<?php
$numero = $_POST['numero'] ?? null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>
    <h2>Tabuada Personalizada</h2>
    <form action="tabuada.php" method="post">
        <label>Digite um número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Gerar Tabuada</button>
    </form>

    <hr>

    <?php if ($numero !== null): ?>
        <h3>Tabuada do <?= $numero ?></h3>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }
        ?>
    <?php endif; ?>
</body>
</html>
