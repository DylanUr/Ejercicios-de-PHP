<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de Variables en PHP</title>
</head>
<body>
    <?php
    // Declaramos tres variables
    $nombre = "Dylan Uribe";
    $edad = 23;
    $es_estudiante = true;

    // Sev muestra el valor inicial de las variables en una oración
    echo "<p>Mi nombre es $nombre, tengo $edad años y soy estudiante: " . ($es_estudiante ? 'Sí' : 'No') . ".</p>";

    // Modificamos una de las variables a mitad del script
    $edad = 30; // Se cambia la edad
    $es_estudiante = false; // Se cambia el estado de estudios

    // Mostramos nuevamente el valor de las variables después del cambio
    echo "<p>Mi nombre es $nombre, ahora tengo $edad años y soy estudiante: " . ($es_estudiante ? 'Sí' : 'No') . ".</p>";
    ?>
</body>
</html>
