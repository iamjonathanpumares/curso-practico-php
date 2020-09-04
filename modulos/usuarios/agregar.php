<?php

require '../../config/base.php';

// Lógica de guardar un usuario
$errores = '';
$mensajes = '';

// Comprobando que el formulario ha sido enviado con el método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Captura los datos del formulario
    $nombre = trim($_POST['nombre']); // Es requerido
    $apellido = trim($_POST['apellido']); // Es requerido
    $email = trim($_POST['email']); // Es requerido

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
        $mensajes .= 'El usuario ha sido agregado con éxito<br>';

    }

    
}

require_once $VIEWS_DIR . 'usuarios/agregar.view.php';