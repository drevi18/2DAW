<?php
class Empleado {
    public string $nombre;
    public string $apellido;
    public int $sueldo;
    private array $numTelf = [];

    public function __construct(string $nom, string $ape, int $suel = 1000) {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->sueldo = $suel;
    }

    public function getNombre() : string {
        return $this->nombre;
    }
    
    public function getNombreCompleto() : string {
        return $this->nombre . " " . $this->apellido;
    }

    public function debePagarImpuestos() : bool {
        return $this->sueldo > 3333;
    }

    public function anyadirTelefono(int $telefono) : void {
        $this->numTelf[] = $telefono;
    }

    public function listarTelefonos() : string {
        return implode(",", $this->numTelf);
    }

    public function vaciarTelefonos() : void {
        $this->numTelf = [];
    }
}
?>
