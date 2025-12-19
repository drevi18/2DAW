<?php 
//crear/abrir un archivo
    $ruta ="FichRep1.txt";
    $archivo = fopen($ruta,"w") or die("Error, no se ha encontrado el archivo");

    //cerrar un archivo
    fclose($archivo);
    
    //escribir en un archivo
    $archivo = fopen($ruta, "w") or die("Error, no se ha podido abrir el archivo");
    $txt = "Sara Gómez \n"; 
    $txt .= "Pepito Palotes \n";
    fwrite($archivo, $txt);
    fclose($archivo);

    //leer un archivo
    function mostrar($ruta){

        $archivo = fopen($ruta,"r") or die("Error, archivo no se puede leer");
        echo readfile($ruta);
        
        while(!feof($archivo)){
            echo fgets($archivo),"<br>";
        }
    }

    //modificar archivo
    $NuevaLinea = "Rosa melano \n";
    file_put_contents($ruta,$NuevaLinea, FILE_APPEND);
    $borrarContacto = "Pepito Palotes";
    $contenido = file_get_contents($ruta);
    $contenido = str_replace($borrarContacto,'',$contenido);
    file_put_contents($ruta,$contenido);
    mostrar($ruta);

    //subir un archivo
    ?>
    <form action="" method = "post" enctype ="multipart/form-data">
        <input type="text" name = "nombre" placeholder= "nombre">
        <input type="text" name = "apellidos" placeholder= "apellidos">
        <input type="file" name="cv"><br>
        <button name = "enviar">Enviar</button>
    </form>
    <?php
    if(!is_dir("csv")){
        mkdir("csv");
    }
    //usar identificador para cada archivo
    $destino="csv/".uniqid()."_".basename($_FILES["cv"]["name"]);

    //filtramos tipos de archivos
    if ($_FILES["cv"]["type"]=="application/pdf") {
        if (move_uploaded_file($_FILES["cv"]["tmp_name"],$destino)) {
            echo "Archivo subido con éxito";
        }else{
            echo "error al subir";
        }
    }

    //eliminar archivo
    $borrarArch = "csv/693fee58b330f_Sara Gómez.pdf";
    if (file_exists($borrarArch)) {
        if (unlink($borrarArch)) {
            echo "archivo boorado";
        }else{
            echo "error";
        }
    }
?>