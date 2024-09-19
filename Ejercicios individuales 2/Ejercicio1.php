<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Tipos de Datos Numéricos</title>
</head>
<body>
    <?php
    // Definimos las dos variables, una de tipo entero y otra flotante
    $entero = 5;
    $flotante = 4.7;

    // Se muestra el tipo de dato de cada variable usando gettype()
    echo "<p>Tipo de \$entero: " . gettype($entero) . "</p>"; // Aqui la salida dec$entero es integer
    echo "<p>Tipo de \$flotante: " . gettype($flotante) . "</p>"; // Y aqui la de $flotante es double

    // Se hace la operacion matematica
    $resultado = $entero + $flotante;
    echo "<p>Resultado de la suma de \$entero + \$flotante: " . $resultado . "</p>"; 

    // Y multiplicamos las 2 variables por 10 para ver la diferencia entre entero y flotante
    $entero_multiplicado = $entero * 10;
    $flotante_multiplicado = $flotante * 10;

    echo "<p>\$entero multiplicado por 10: " . $entero_multiplicado . "</p>"; 
    echo "<p>\$flotante multiplicado por 10: " . $flotante_multiplicado . "</p>"; 
    ?>
</body>
</html>
