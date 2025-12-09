<?php
$dsn = 'mysql:dbname=dbname;host=db:3306';
$usuario = 'test';
$contrasena = 'test';

try {
    $conexion = new PDO($dsn, $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión Establecida con la BD en Docker";
} catch (PDOException $e) {       //en caso de detectar un error lo muestra
    echo 'Falló la conexión: ' . $e->getMessage();
}

$id = $_GET["id"] ?? 1;                 //los valores que queremos cambiar
$email = "nuevo@email.com";

$sql = "UPDATE miTabla SET email=:email WHERE id=:id";   

$sentencia = $conexion->prepare($sql);
$sentencia->bindParam(':id', $id);
$sentencia->bindParam(':email',$email);
$sentencia->execute();       //borra los valores

$cantidadAfectada = $sentencia->rowCount(); //Devuelve el número de filas afectadas por la última sentencia SQL
echo $cantidadAfectada;
?>