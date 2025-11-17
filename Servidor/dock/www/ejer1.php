<?php 

$arrayDatos = [];

$fichero = fopen("./ejer1.csv","r");

while (!feof($fichero)) {
    $linea = trim(fgets($fichero));


    if ($linea != "") {
        $separado = explode(",", $linea);

        $separado = [
        "producto" => $separado[0],
        "categoria" => $separado[1],
        "precio" => $separado[2]
        ];

        $arrayDatos[] = $separado;

    }



}

fclose($fichero);

print_r($arrayDatos);


?>