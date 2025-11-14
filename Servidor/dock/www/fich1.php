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
        <p>Notas VLC</p><br>
        <input type="number" name = "VLC[]" placeholder ="nota 1er trimestre">
        <input type="number" name = "VLC[]"placeholder ="nota 2er trimestre">
        <input type="number" name = "VLC[]" placeholder ="nota 3er trimestre"><br>
        <p>Ciclo que cursa</p><br>
        <input type="text" name="curso" placeholder="ciclo alumno">

    </form>
</body>
</html>


<?php 
$dni = $_POST["dni"];
$arrayNotas = $_POST["VLC"];
$curso = $_POST["curso"];
$media = 0;

foreach ($arrayNotas as $key => $value) {
    $media += $value;
}


?>