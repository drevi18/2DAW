<?php

require_once "Animal.php";      
require_once "Vacuna.php";

class Perro extends Animal implements Vacunable {

    public static int $contadorPerros = 0;

    public function __construct(
        string $nombre,
        public string $raza,
        public int $edad,
        protected int $patas
    ){
        parent::__construct($nombre);
        self::$contadorPerros++;
    }

    public function hacerSonido(): string{
        return "GUAU GUAU!!";
    }

    public function vacunar(): string {
        return $this->getNombre() . " ha sido vacunado";
    }

     public static function mostrarCantidad(): string {
        return "Hay " . self::$contadorPerros . " perros creados.";
    }

    public function mostrarPatas(): string {
        return "tiene ".$this->patas;
    }
}

?>