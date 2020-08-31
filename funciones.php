<?php

/*
 *
 * Las funciones son bloques de código que realizan una tarea concreta y que podemos reutilizar en cualquier parte de nuestra aplicación o script
 */

// Funciones que no reciben parámetros y no retornan un valor
function saludo()
{
    echo 'Hola culebrita<br>';
}

saludo(); // Llamamos a nuestra función
saludo();
saludo();

// Funciones que reciben parámetros y no retornan un valor
function saludo2($nombre) // parámetros
{
    echo "Hola {$nombre}<br>";
}

saludo2('culebrita'); // argumentos

// Funciones que no reciben parámetros y que retornan un valor
function saludo3()
{
    return 'Hola PHP<br>';
}
$mensaje = saludo3();
echo $mensaje;

// Funciones que reciben parámetros y que retornan un valor
function suma($n1, $n2)
{
    return $n1 + $n2;
}
$resultado = suma(10, 15);
echo $resultado;