<?php

namespace ITCampeche;

class Persona
{
    // Constructor: Nos permite definir valores iniciales a nuestros objetos
    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        self::$contador += 1; // Utilizar self cuando queremos acceder a a las propiedades y métodos estáticos
    }

    // Atributos: Son representados por variables
    private $nombre;
    protected $apellido;
    public $colorOjos;
    public static $contador = 0; // Saber el número de veces que estamos creando un objeto

    // Métodos: Son representados por funciones
    public function caminar()
    {
        echo 'Caminando...<br>';
    }

    public function comer()
    {
        echo 'Comiendo...<br>';
    }

    public function leer()
    {
        echo 'Leyendo<br>';
    }

    public function fullName()
    {
        return $this->nombre . ' ' . $this->apellido . '<br>'; // Utilizar $this cuando queremos acceder a los atributos y métodos que no son estáticos y que esten dentro de la misma clase
    }

    public function getNombre()
    {
        return $this->nombre . '<br>';
    }
}
