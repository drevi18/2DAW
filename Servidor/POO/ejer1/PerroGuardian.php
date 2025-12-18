<?php 

class PerroGuardian extends Perro{

    public function __construct(
        string $nombre,
        string $raza,
        int $edad,
        int $patas,
        public bool $tieneCollar
    ){
        parent:: __construct($nombre, $raza, $edad,$patas);
    }

    public function alertar():string{
        return $this->getNombre()." esta alertando"; 
    }
}

?>