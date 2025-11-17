<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Rellena el formulario</h1><br>
    <form action="" method = "post">
        <p>DNI</p><br>
        <input type="text" name = "dni" placeholder ="DNI"><br>
        <input type="text" name= "asignatura" placeholder = "Asignatura">
        <p>Notas</p><br>
        <input type="number" name = "media[]" placeholder ="nota 1er trimestre">
        <input type="number" name = "media[]"placeholder ="nota 2er trimestre">
        <input type="number" name = "media[]" placeholder ="nota 3er trimestre"><br>
        <p>Ciclo que cursa</p><br>
        <input type="submit" name = "boton" value = "enviar">

    </form>
</body>
</html>


<?php 
    $media = 0;
    $suma = 0;
    $arrayNotas =[];
    $encontrado = false;
    $asignaturas = [];
    $arrayDatos = [];

if (isset($_POST["dni"]) && isset($_POST["asignatura"]) && isset($_POST["media"])) {

    $dni = $_POST["dni"];
    $asignatura = $_POST["asignatura"];
    $arrayNotas = $_POST["media"];

    foreach ($arrayNotas as $key => $value) {
        $suma = $suma + $value;
        $media = $suma / 3;
    }
}

$fitxer = fopen("./notasalumnos.csv", "r");
while(!feof($fitxer)){
    $linea = trim(fgets($fitxer));

    if ($linea != "") {
        
        $separado = explode(",",$linea);

        $alumno = $separado[0];
        $asignatura = $separado[1];
        $nota = $separado[2];

        if (!isset($arrayDatos[$asignatura])) {
            $arrayDatos[$asignatura] = [];
        }
        $index = count($arrayDatos[$asignatura]);  
        
        $arrayDatos[$asignatura][$index]["alumno"] = $alumno;
        $arrayDatos[$asignatura][$index]["nota"] = $nota;


        
    }
}


print_r($arrayDatos);
?>