<?php
$produtos = [
    "Arroz" => 25.90,
    "Feijão" => 8.50,
    "Macarrão" => 6.20,
    "Óleo" => 7.80,
    "Açúcar" => 5.40
];

$total = 0;

foreach ($produtos as $nome => $preco) {
    echo "Produto: $nome - Preço: R$ " . number_format($preco, 2, ',', '.') . "<br>";
    $total += $preco;
}

echo "<hr>";
echo "Valor total da compra: R$ " . number_format($total, 2, ',', '.');
?>
