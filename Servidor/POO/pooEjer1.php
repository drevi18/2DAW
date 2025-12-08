<?php 

class Empleado{
    public string $nombre;
    public string $apellido;
    public int $sueldo;

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
}

$resultado = "";

if (isset($_POST["enviar"]) && !empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["sueldo"])) {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $sueldo = (int)$_POST["sueldo"];

    $empleado = new Empleado($nombre, $apellido, $sueldo);

    $resultado  = "Nombre completo: " . $empleado->getNombreCompleto() . "<br>";
    $resultado .= "¿Debe pagar impuestos? " .$empleado->debePagarImpuestos();

} else {
    $resultado = "Rellena todos los campos.";
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulario Empleado</title>
</head>
<body>
    <h2>Crear Empleado</h2>

    <form method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Apellido:</label><br>
        <input type="text" name="apellido" required><br><br>

        <label>Sueldo:</label><br>
        <input type="number" name="sueldo" required><br><br>

        <button type="submit">Enviar</button>
    </form>

    <hr>

    <h3>Resultado:</h3>
    <?= $resultado ?>
</body>
</html>
