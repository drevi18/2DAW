<?php 

$arrayDatos = [];
$contar = [];
$sumas = [];

$fichero = fopen("./ejer1.csv","r");

while (!feof($fichero)) {

    $linea = trim(fgets($fichero));

    if ($linea != "") {
        $separado = explode(",", $linea);

        $arrayDatos[] = [
            "producto" => $separado[0],
            "categoria" => $separado[1],
            "precio" => (float)$separado[2]
        ];
    }
}

fclose($fichero);



foreach ($arrayDatos as $key) {

    $categoria = $key["categoria"];
    $precio = $key["precio"];

    if (!isset($contar[$categoria])) {
        $contar[$categoria] = 0;
        $sumas[$categoria] = 0;
    }

    $contar[$categoria]++;
    $sumas[$categoria] += $precio; 
}

foreach ($contar as $key => $value) {
    echo "Del producto ".$key." hay unidades ".$value." unidades y en total suman ".$sumas[$key]." euros<br>";
}

// print_r($arrayDatos);
// echo "<br>";
// print_r($contar);

?>
