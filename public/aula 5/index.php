<?php
// Definindo a variável da imagem
$imagem = "filme.png";

// Capturando dados do formulário (se enviados)
$filme = $_POST['filme'] ?? '';
$genero = $_POST['genero'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Filmes</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        header, footer { background: #f0f0f0; padding: 10px; text-align: center; }
        .terror { color: red; font-weight: bold; }
        .comedia { color: green; font-weight: bold; }
    </style>
</head>
<body>

    <!-- Inclui cabeçalho -->
    <?php include "cabecalho.php"; ?>

    <!-- Exibe imagem no topo -->
    <img src="<?= $imagem ?>" alt="Imagem de filme" width="150">

    <h2>Cadastro de Filme</h2>

    <form action="index.php" method="post">
        <label>Nome do Filme:</label><br>
        <input type="text" name="filme" required><br><br>

        <label>Gênero:</label><br>
        <input type="text" name="genero" required placeholder="ex: ação, comédia, drama"><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <hr>

    <?php if ($filme && $genero): ?>
        <?php
            // Tratamento do estilo da mensagem
            $classe = "";
            if (strtolower($genero) === "terror") {
                $classe = "terror";
            } elseif (strtolower($genero) === "comédia" || strtolower($genero) === "comedia") {
                $classe = "comedia";
            }
        ?>
        <p class="<?= $classe ?>">
            Filme cadastrado: <strong><?= htmlspecialchars($filme) ?></strong> <br>
            Gênero: <strong><?= htmlspecialchars($genero) ?></strong>
        </p>
    <?php endif; ?>

    <!-- Inclui rodapé -->
    <?php include "rodape.php"; ?>

</body>
</html>
