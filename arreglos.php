<?php

/*
 *
 * Arreglos: Son un tipo de dato complejo, porque son capaces de almacenar más de un valor
 */

 // Arreglos indexados: Se acceden a través de un índice, es decir una posición en el arreglo
 $arreglo = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'); // Fue la primera forma que se uso
 $arreglo2 = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes']; // Es la forma actual de declarar arreglos
 var_dump($arreglo);

 echo $arreglo[0]; // Acceder a los elementos de un arreglo

 $arreglo[5] = 'Sabado'; // Agregar valores a un arreglo
 var_dump($arreglo);

 $arreglo[0] = 'Chumes'; // Modificar los valores de un arreglo
 echo $arreglo[0];

 // Arreglos asociativos: Son aquellos que asocian una clave y un valor

 $persona = ['nombre' => 'Jonathan', 'primer_apellido' => 'Pumares'];
 var_dump($persona);

 echo $persona['nombre']; // Acceder a los elementos de un arreglo asociativo

 $persona['segundo_apellido'] = 'Chab'; // Agregamos un elemento a un arreglo asociativo
 var_dump($persona);

 $persona['nombre'] = 'Jonathan Emmanuel';
 echo $persona['nombre'];

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
 var_dump($personas);