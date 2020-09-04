<?php

$errores = '';

// Comprobando que el formulario ha sido enviado con el método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Captura los datos del formulario
    extract($_POST);
    /*$nombre = trim($_POST['nombre']); // Es requerido
    $apellido = trim($_POST['apellido']); // Es requerido
    $email = trim($_POST['email']); // Es requerido*/

    // Valido los campos del formulario
    if (empty($nombre))
    {
        $errores .= 'Por favor escribe tu nombre<br>';
    }
    else
    {
        // El nombre es correcto
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    }

    // Valido los campos del formulario
    if (empty($apellido))
    {
        $errores .= 'Por favor escribe tu apellido<br>';
    }
    else
    {
        // El nombre es correcto
        $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
    }

    // Valido los campos del formulario
    if (empty($email))
    {
        $errores .= 'Por favor escribe tu email<br>';
    }
    else
    {
        // El nombre es correcto
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errores .= 'Tu email no es válido<br>';
        }
    }

    if (empty($errores)) // Si esta vacio no hay errores
    {
        echo $nombre;
        echo $apellido;
        echo $email;
        // Realizar alguna acción: Guardar un registro, actualizar un registro, enviar un correo electrónico, etc.
        $statement = $conexion->prepare('
            INSERT INTO usuarios(nombre, apellido, email) VALUES(:nombre, :apellido, :email)
        ');
        $statement->execute(array(
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':email' => $email,
        ));

    }

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <?php if (!empty($errores)): ?>
            <p><?php echo $errores; ?></p>
        <?php endif; ?>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido">

        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <input type="submit" name="formulario1" value="Enviar">
    </form>
</body>
</html>