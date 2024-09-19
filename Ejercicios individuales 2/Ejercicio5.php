<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con Strings y Expresiones Regulares</title>
</head>
<body>
    <?php
    // Definimos unas string con un correo electrónico falso
    $correo = "dylan.z=av@example.com";

    // Usamos interpolación para insertar el correo en una oración
    echo "<h2>Correo Electrónico</h2>";
    echo "<p>El correo electrónico que estás verificando es: $correo</p>";

    // Usamos la siguiente expresion para validar el correo
    $patron = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

    // Verificamos si el correo es válido usando preg_match
    if (preg_match($patron, $correo)) {
        echo "<p>El correo es válido.</p>";
    } else {
        echo "<p>El correo no es válido.</p>";
    }

    // Extraemos el nombre de usuario en la parte antes del @ usando substr
    $posicionArroba = strpos($correo, '@');
    $nombreUsuario = substr($correo, 0, $posicionArroba);

    // Mostramos el nombre de usuario
    echo "<p>El nombre de usuario del correo es: $nombreUsuario</p>";
    ?>
</body>
</html>
