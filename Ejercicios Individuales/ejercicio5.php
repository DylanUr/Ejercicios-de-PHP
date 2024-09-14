<?php
$numero_aleatorio = rand(1, 100);
echo "El número aleatorio generado es: $numero_aleatorio<br>";
if ($numero_aleatorio > 50) {
    echo "El número es mayor que 50.";
} elseif ($numero_aleatorio < 50) {
    echo "El número es menor que 50.";
} else {
    echo "El número es igual a 50.";
}
?>
