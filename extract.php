<?php

$persona = [
    'nombre' => 'Jonathan',
    'apellido' => 'Pumares',
    'ciudad' => 'Campeche',
];

extract($persona);

echo $nombre;
//echo $persona['nombre'];