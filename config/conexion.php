<?php

function conectar($basedatos, $usuario, $pass)
{
    // Se establece la conexión
    try {
        return $conexion = new PDO("mysql:host=localhost;dbname={$basedatos}", $usuario, $pass);
        // echo 'Se realizo la conexión correctamente';
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
}