<?php

if (isset($_POST['enviar'])) {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    
    
    
    $sql = "INSERT INTO miTabla (nombre, email, edad) VALUES ('Julio', 'julio@gmail.com', '65')";
    $conexion->exec($sql);
    echo "Nuevo registro creado correctamente";
}



?>

<form action="" method="post">
    <input type="text" name="nombre" placeholder="Nombre"><br>
    <input type="number" name="edad" placeholder="Edad"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <button type="submit" name="enviar">Enviar</button>
</form>