<style>
    table{
        border: 1px solid black;
    }

    tr{
        border: 1px solid black;
    }

</style>

<form action="" method="post">
    <input type="text" name="nombre" placeholder="Nombre"><br>
    <input type="number" name="edad" placeholder="Edad"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <button type="submit" name="enviar">Enviar</button>
</form>

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




if (isset($_POST['enviar'])) {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];
    
    
    
    $sql = "INSERT INTO miTabla (nombre, email, edad) VALUES (:nombre, :email, :edad)";
    $sentencia = $conexion->prepare($sql);  
    $sentencia->bindParam(":nombre", $nombre);
    $sentencia-> bindParam(":email",$email);
    $sentencia-> bindParam(":edad",$edad);
    $isOk = $sentencia->execute();
    $idGenerado = $conexion->lastInsertId();
    
}

if (isset($_POST["borrar"])) {
    
    $identificador = $_POST["borrar"];              //si No recibe ningún valor del $_GET asigna 0.
    
    $sql = "DELETE FROM miTabla WHERE id = :idValor";
    
    $sentencia = $conexion->prepare($sql);    
    $sentencia->bindParam(":idValor", $identificador);  //asocia el $identicador a :idValor
    $isOk = $sentencia->execute();                      //borra los valores
    
    $cantidadAfectada = $sentencia->rowCount();  //Devuelve el número de filas afectadas por la última sentencia SQL
    echo $cantidadAfectada;
    $subido = true;
}

    $sql = "select * from miTabla";

    $sentencia = $conexion -> prepare($sql);
    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    $sentencia -> execute();

    $datos = $sentencia -> fetchAll();   //recuperamos todos los datos y los guardamos en un array '$datos'

    echo "<form action='' method='post'><table>
    <tr>
    <th>ID</th>
    <th> Nombre </th>
    <th> Email </th>
    <th> Edad</th>
    <th> Borrar</th>
    </tr>";
    foreach($datos as $fila) {      //vamos recorriendo fila a fila
        echo "<tr>
        <td>".$fila["id"]."</td>
        <td>".$fila["nombre"]."</td>
        <td>".$fila["email"]."</td>
        <td>".$fila["edad"]."</td>
        <td><a href='./actualizar.php?id={3}' value=".$fila["id"]." name = 'borrar'>Borrar</button></td>
        <td><button name = 'borrar' value='{$fila["id"]}'>Borrar</button></td>
        <td>
        </tr>";
    }
    echo"</form>";



?>


