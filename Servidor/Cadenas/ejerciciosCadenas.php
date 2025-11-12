<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 7</h1>
    <?php
        $contra = "Segura";  
        $longitud = strlen($contra);
        $vocales = ['a', 'e', 'i', 'o', 'u'];
        $tieneVocal = false;
        $segura = true;

        if ($longitud < 6 || $longitud > 10) {
            echo "La contraseña debe tener entre 6 y 10 caracteres.<br>";
            $segura = false;
        }

        if (strpos($contra, ' ') !== false) {
            echo "La contraseña no debe contener espacios.<br>";
            $segura = false;
        }

        $contra = strtolower($contra);

        $consecVocal = 0;
        $consecCons = 0;

        for ($i = 0; $i < $longitud; $i++) {
            $char = $contra[$i];
        
            if (in_array($char, $vocales)) {
                $tieneVocal = true;
                $consecVocal++;
                $consecCons = 0;
            } else {
                $consecCons++;
                $consecVocal = 0;
            }
        
            if ($consecVocal == 3 || $consecCons == 3) {
                echo "No puede tener tres vocales o consonantes consecutivas.<br>";
                $segura = false;

            }
        
            if ($i > 0 && $char == $contra[$i - 1] && !($char == 'e' || $char == 'o')) {
                echo "No puede tener dos letras iguales seguidas, salvo 'ee' o 'oo'.<br>";
                $segura = false;

            }
        }

        if (!$tieneVocal) {
            echo "La contraseña debe contener al menos una vocal.<br>";
            $segura = false;
        }

        if ($segura) {
            echo "La contraseña '$contra' es segura.";
        } else {
            echo "La contraseña '$contra' no es segura.";
        }
    ?>

    <h1>Ejercicio 8</h1>

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

    

</body>
</html>
