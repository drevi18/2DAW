<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>

<h1>Ejercicios Cadenas</h1>
<br>
<h1>Ejer 1</h1>
    <?php
    $frase = "voy a cambiar esta frase <br>";
    $nueva = "";

    echo $frase;

    for ($i=0; $i < strlen($frase); $i++) {
        $letra = $frase[$i];
        if ($i % 2 == 0) {
            $letra = strtoupper($letra);
        }
        $nueva .= $letra;
    }
    echo $nueva;
    ?>

    <h1>Ejer 2</h1>
    <?php
    $frase = "Estoy probando cadenas";
    $nueva = "";

    for ($i=0; $i < strlen($frase); $i++) {
        $letra = $frase[$i];
        if ($i % 2 != 0) {
            $letra = strtoupper($letra);
            $nueva .= $letra;
        }
    }
    echo "<br>".$nueva;
    ?>

    <h1>Ejer 3</h1>
    <?php
    $contpal = 0;
    $frase = "Bomba Comida Pelota Volteretas";
    $sum = 0;

    $arrayPalabras = explode(" ", $frase);
    foreach ($arrayPalabras as $key) {
        $contpal ++;
    }
    
    foreach ($arrayPalabras as $key) {
        $tampal = strlen($key);
        echo "La palabra: ".$key." tiene ".$tampal." letras <br>";
        $sum += $tampal;
    }
    echo "Las palabras en total tienen ".$sum." letras y hay ".$contpal." palabras en total <br>";

    ?>

    <h1>Ejer 4</h1>

    <?php 
    $frase = "Vamos a contar las vocales de esta frase";

    $frase = strtolower($frase);

    $a = substr_count($frase , "a");
    $e = substr_count($frase, "e");
    $i = substr_count($frase, "i");
    $o = substr_count($frase, "o");
    $u = substr_count($frase, "u");

    $suma = $a + $e + $i + $o + $u;

    echo "A: ".$a."<br>E: ".$e."<br>I: ".$i."<br>O: ".$o."<br>U: ".$u."<br>En total en la frase hay: ".$suma." vocales";
    ?>

    <h1>Ejercicios Robot</h1>
    <?php
        $robot= "1 5W;1 1|2 1x1 1x2 1|;1@4 1U4 1@;1 1|2 3=2 1|;2 1\\5_1/";

        $arrayZonas = explode(";",$robot);
        


    ?>

    <h1>Ejer 5</h1>
    <?php
    $numero = "12345678633456"; 

    $vuelta = strrev($numero);
    $div = str_split($vuelta, 3);
    $puntos = implode('.', $div);
    $nueva = strrev($puntos);

    echo $nueva

    ?>

    <h1>Ejercicio 6</h1>
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

    <h1>Ejercicio 7</h1>

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