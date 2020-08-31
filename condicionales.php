<?php

/*
 *
 * Condicionales: Nos permiten controlar el flujo de nuestra aplicación dependiendo de los que estemos comprobando
 */

 // if ()
 // else
 
 $edad = 5;
 // Si es mayor de edad
 if ($edad >= 18) 
 {
    echo 'Eres mayor de edad';
 }
 else
 {
    echo 'Eres un(a) niño(a)';
 }

 /*
  *
  * Si un  número es cero, positivo o negativo
  */
 // if anidados: Es tener un if dentro de otro if o un else. Lo podemos tanto como nuestra aplicación lo requiera.
 $numero = 9;
if ($numero == 0)
{
    echo 'El número es cero<br>';
}
else
{
    if ($numero > 0)
    {
        echo 'El número es positivo<br>';
    }
    else 
    {
        echo 'El número es negativo<br>';
    }
}

// Sentencia if/elseif
$numero = 9;
if ($numero > 0)
{
    echo 'El número es positivo<br>';
}
elseif ($numero == 0)
{
    echo 'El número es cero<br>';
}
else
{
    echo 'El número es negativo<br>';
}

// https://www.php.net/manual/es/language.types.boolean.php
$usuarios = [];
if ($usuarios)
{
    echo 'Si hay usuarios<br>';
}
else
{
    echo 'No hay elementos para mostrar<br>';
}

// Uso de los operadores lógicos en las condicionales

// ¿De qué manera comprobarías si un número es par y es múltiplo de 4?

// if anidado
$numero = 12;
if ($numero % 2 == 0) // Si es par
{
    if ($numero % 4 == 0)
    {
        echo 'El número es par y es múltiplo de 4<br>';
    }
}

if ($numero % 2 == 0 && $numero % 4 == 0)
{
    echo 'El número es par y es múltiplo de 4<br>';
}