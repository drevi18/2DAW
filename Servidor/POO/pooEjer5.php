<?php
class Empleado {
private static int $sueldoTope = 3000;


    public function __construct(
        public string $nombre,
        public string $apellido,
        public int $sueldo = 1000,
        private array $numTelf = []
    ) {}

    public static function getSueldoTope(): int {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(int $nuevoTope): void {
        self::$sueldoTope = $nuevoTope;
    }

    public function getNombre() : string {
        return $this->nombre;
    }
    
    public function getNombreCompleto() : string {
        return $this->nombre . " " . $this->apellido;
    }

    public function debePagarImpuestos() : bool {
        return $this->sueldo > self::LIMITE;
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
