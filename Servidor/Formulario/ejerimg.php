<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="" method = "post">
    <input type="file" name="imagen" >
    <input type="submit" name="enviar" value="enviar"> 
    
    </form>
</body>
</html>


<?php

$dir_subida = './img/';

if (isset($_POST["enviar"])) {
    $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

$carpetaAux = $dir_subida;
$imagenes = array_slice(scandir($carpetaAux),2);
foreach ($imagenes as $img) {
    echo "<img src= './img/$img' alt=''>";
    echo "<form enctype='multipart/form-data' action='' method = 'post'><button name 'borrar' value = './img/$img'>Borrar</button></form> <br>";
}

}

if (isset($_POST["borrar"])) {
    unlink($_POST["borrar"]);
}
print_r($_FILES);


?>