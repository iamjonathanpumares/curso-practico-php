<?php

/*
 *
 * Ciclos: nos permiten ejecutar varias veces un conjunto de instrucciones mientras una condición se cumpla
 */ 

// while (Mientras)
// do while
// for
// foreach

// Recorrer objetos con while
$arreglo2 = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];

$i = 0;
while ($i < count($arreglo2))
{
    echo $arreglo2[$i].'<br>';
    $i = $i + 1;
}

// foreach: Funciona con los arreglos asociativos
$personas = [
    [
        'nombre' => 'Jonathan',
        'primer_apellido' => 'Pumares'
    ],
    [
        'nombre' => 'Jorge',
        'primer_apellido' => 'Chuc'
    ],
    [
        'nombre' => 'Josefa',
        'primer_apellido' => 'Hernandez'
    ],
    [
        'nombre' => 'Alicia',
        'primer_apellido' => 'Garcia'
    ]
 ];

foreach ($personas as $persona)
{
    echo $persona['nombre'].'<br>';
}