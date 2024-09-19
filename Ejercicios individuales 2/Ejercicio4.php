<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expresiones y Operadores en PHP</title>
</head>
<body>
    <?php
    // Empezamos por declarar nuestras 2 variables numericas
    $num1 = 10;
    $num2 = 3;

    // Ponemos los operadores aritméticos
    echo "<h2>Operaciones Aritméticas</h2>";
    $operaciones = [
        '+' => $num1 + $num2,
        '-' => $num1 - $num2,
        '*' => $num1 * $num2,
        '/' => $num1 / $num2,
        '%' => $num1 % $num2
    ];

    // Aqui mostramos los resultados de las operaciones aritméticas, se utilizan bucles foreach para recorrer los arrays
    foreach ($operaciones as $operador => $resultado) {
        echo "<p>$num1 $operador $num2 = $resultado</p>";
    }

    // Los operadores de comparación
    echo "<h2>Comparaciones</h2>";
    $comparaciones = [
        '>'  => $num1 > $num2,
        '<'  => $num1 < $num2,
        '>=' => $num1 >= $num2,
        '<=' => $num1 <= $num2,
        '==' => $num1 == $num2,
        '!=' => $num1 != $num2
    ];

    // Mostramos los resultados de las comparaciones
    foreach ($comparaciones as $operador => $resultado) {
        echo "<p>$num1 $operador $num2 = " . ($resultado ? 'true' : 'false') . "</p>";
    }

    // Ponemmos los operadores lógicos, se hace uso de arrays asociativos para que los resultados de las operaciones aritméticas, -
    // comparaciones y operadores lógicos se almacenan en arrays y no se repita tanto el codigo
    echo "<h2>Operadores Lógicos</h2>";
    $logicos = [
        "($num1 > 5) && ($num2 < 5)" => $num1 > 5 && $num2 < 5,
        "($num1 > 5) || ($num2 > 5)" => $num1 > 5 || $num2 > 5,
        "!($num1 > $num2)"            => !($num1 > $num2)
    ];

    // Y Mostramos los resultados de las expresiones lógicas
    foreach ($logicos as $expresion => $resultado) {
        echo "<p>$expresion = " . ($resultado ? 'true' : 'false') . "</p>";
    }
    ?>
</body>
</html>
