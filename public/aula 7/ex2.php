<?php
$numero = 1;

echo "<h2>Números pares de 1 a 20</h2>";

while ($numero <= 20) {
    if ($numero % 2 == 0) {
        echo $numero . "<br>";
    }
    $numero++;
}
?>
