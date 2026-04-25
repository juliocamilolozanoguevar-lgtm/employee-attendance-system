<?php
require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE_BUSINESS; ?></title>
</head>
<body>
    <form action="#">
        <label for="username">Usuario:</label>
        <input id="user" type="text" required>
        <label for="pass">contraseña</label> 
        <input id="pass" type="password">
        <button type="button">Enviar</button>
    </form>
</body>
</html>