<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejer 1</h1>
    <?php 
    $frase = "Frase larga para hacer el ejercicio";
    $arrayFrase = explode(" ", $frase);

    for ($i=0; $i < count($arrayFrase) ; $i++) { 
        if ($i % 2 == 0) {
            $arrayFrase[$i] = strtoupper($arrayFrase[$i]);
        }else {
            $arrayFrase[$i] = strtolower($arrayFrase[$i]);    
        }
    }

    $nuevo = implode(" ",$arrayFrase);

    ?>

    <h1>Ejer 2</h1>

    <?php 
    $frase = "Vamos a probar este ejercicio divertido aupa";
    $vocales = ["a","e","i","o","u"];
    $arrayFrase = explode(" ", $frase);

    for ($i=0; $i < count($arrayFrase) ; $i++) { 
        for ($j=0; $j < count($vocales) ; $j++) { 

            if (substr($arrayFrase[$i], 0 ,1) == $vocales[$j] ) {
                $arrayFrase[$i] = strrev($arrayFrase[$i]);
            }
        }
    }

    $nueva = implode(" ",$arrayFrase);

    echo $nueva;

    ?>
</body>
</html>