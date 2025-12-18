<?php

require_once "Animal.php";      
require_once "Vacuna.php";

class Gato extends Animal implements Vacunable {

    public function __construct(
        string $nombre,
        public string $raza,
        public int $edad
    ){
        parent::__construct($nombre);
    }

    public function hacerSonido():string{
        return "MIAUW MIAUW";
    }

    public function vacunar(): string {
        return $this->getNombre() . " ha sido vacunado";
    }

}

?>