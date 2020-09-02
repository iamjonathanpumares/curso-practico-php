<?php

// require_once 'Persona.php';
// require_once 'Persona.php';
require_once 'Padre.php';
require_once 'Persona.php';
require_once 'Unidad.php';
require_once 'Soldado.php';
require_once 'Arquero.php';

/*
 *
 * ¿Que es un paradigma de programación?
 * ¿Que paradigmas de programación soporta PHP?
 * Ventajas de la POO
 * Elementos y Características: Clases, Atributos, Métodos, Objetos, Herencia, Polimorfismo, Encapsulamiento
 * El método constructor
 * 
 * Ventajas de la POO
 * 
 * Permite la reutilización
 * 
 * Crear sistemas más complejos
 * 
 * Relaciona el sistema al mundo
 * 
 * Ayuda a mantener nuestro software actualizado
 */

 /*
  * 
  * Elementos y Características de la POO
  *
  * Elementos
  *
  * Clases
  *     Atributos: Son todas aquellas características de un objeto
  *     Métodos: Son todo ese conjunto de acciones que realiza objeto
  */

// Es una plantilla o definición de algo
// Convención de nombre de clases: upper camelcase, en donde la primera letra de cada palabra va en mayusculas  


// Objeto: Es cuando ya hacemos uso de la plantilla
$persona = new Persona('Jonathan', 'Pumares'); // Creando un objeto de la Persona o estamos creando una instancia de la clase Persona
$persona = new Persona('Jose', 'Perez');
$persona = new Persona('Jose', 'Perez');
$persona = new Persona('Jose', 'Perez');

echo $persona->fullName();
$persona->caminar();
echo Persona::$contador . '<br>';

$firstName = 'Jonathan';
$lastName = 'Pumares';
$fullName = "{$firstName} {$lastName}"; // Duplicando código

echo "Bienvenido {$fullName} <br>";

$firstName2 = 'Jose';
$lastName2 = 'Perez';
$fullName2 = "{$firstName2} {$lastName2}"; // Duplicando código

echo "Bienvenido {$fullName2} <br>";

// Herencia: nos permite tener clases que se extiedan de otras, nos hereda o comparte sus atributos y métodos no privados de otra clase.
$hijo = new Hijo();
$hijo->say();

// Propiedades y métodos estáticos

// Clases abstractas: Es una clase que sirve como base o plantilla para otros clases y que no puede ser instanciada




$soldado = new Soldado();
$soldado->atacar();
$soldado->mover();




