<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
        <input type="text" name = "frase">
    </form>
</body>
</html>

<?php

$frase = "";
$contPal =0;
$contLetras =0;

if (isset($_POST["frase"])) {
    $frase = $_POST["frase"];

    $arrayFrase = explode(" ", trim($frase));

    
    foreach ($arrayFrase as $key => $value) {
        $contPal = $contPal + 1;
        $contLetras = $contLetras + strlen($value);
         echo "La palabra '".$value."' tiene en total ".strlen($value)." letras <br>";
    }
    echo "hay en total ".$contPal." palabras<br>";
    echo "hay en total ".$contLetras." letras<br>";


}


?>