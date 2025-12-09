<?php
class Empleado{
    public string $nombre;
    public string $apellido;
    public int $sueldo;
    private array $numTelf;


    public function __construct(string $nom){
        $this->nombre = $nom;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }

    public function getNombreCompleto() :string {
        return $this->nombre . " " . $this->apellido;
    }

    public function debePagarImpuestos(): bool{
        $pagar = false;
        if ($this->sueldo > 3333) {
            $pagar = true;
        }
        return $pagar;
    }

    public function anyadirTelefono(int $telefono) : void{
        $numTelf[]= $telefono;
    }

    public function listarTelefonos(): string{
        $cadena = implode(",",$numTelf);
        return $cadena;
    }

    public function vaciarTelefonos(): void {
        $numTelf = [];
    }
}

?>