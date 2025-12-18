<?php
abstract class Animal {
    protected string $nombre;
    const ES_SER_VIVO = true;

    public function __construct(string $nombre){
        $this->nombre = $nombre;
    }

     public function getNombre(): string {
        return $this->nombre;
    }

    abstract public function hacerSonido():string;
    
    public function esVivo(): string {
        return self::ES_SER_VIVO ? "Sí, es un ser vivo" : "No";
    }
}

?>