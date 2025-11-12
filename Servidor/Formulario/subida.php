<?php 
    if (isset($_POST["boton"]) && isset($_FILES["arch"])) {
        $archivo = $_FILES["arch"];

        $carpetaImagenes = "img/".$archivo["name"];
        if (move_uploaded_file($archivo["tmp_name"],$carpetaImagenes)) {
            echo "<h3>Imagen subida correctamente</h3><br>";
        }else{
            echo"<h3>Algo no ha salido bien</h3>";
        }
    }

    $archivos = scandir("img");

    foreach($archivos as $img){
        if ($img != "." && $img != "..") {
            echo '<img src="img/' . $img . '" width="100px" style="margin:5px;"><br> ';
        }
    }
    
?>