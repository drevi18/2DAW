<?php
class Empleado {

    public function __construct(
        public string $nombre,
        public string $apellido,
        public int $sueldo = 1000,
        private array $numTelf = []
    ) {}

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
