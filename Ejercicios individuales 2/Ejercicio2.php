<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulación de Strings en PHP</title>
</head>
<body>
    <?php
    // Variable con mi nombre completo
    $nombre_completo = "Dylan Eduardo Zvaleta Uribe";

    // Mostramos el número de caracteres en el nombre usando strlen()
    echo "<p>Tu nombre tiene " . strlen($nombre_completo) . " caracteres.</p>"; 

    // Mostramos el nombre en mayúsculas usando strtoupper()
    echo "<p>Tu nombre en mayúsculas es: " . strtoupper($nombre_completo) . "</p>";

    // Y mostramos el nombre al revés usando strrev()
    echo "<p>Tu nombre al revés es: " . strrev($nombre_completo) . "</p>";
    ?>
</body>
</html>
