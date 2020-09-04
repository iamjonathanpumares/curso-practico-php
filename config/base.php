<?php

require_once 'conexion.php';

// /home/jonathan/Sites/curso-practico
// C:\\laragon\www\curso-practico-php
$BASE_DIR = dirname(__DIR__); // __DIR__ (config)

$VIEWS_DIR = $BASE_DIR . '/views/';

$DB_CONFIG = [
    'basedatos' => 'curso_practico_php',
    'usuario' => 'root',
    'pass' => '',
];

// http://localhost/curso-practico-php
$APP_URL = 'http://curso-practico-php.test';

$conexion = conectar($DB_CONFIG['basedatos'], $DB_CONFIG['usuario'], $DB_CONFIG['pass']);

