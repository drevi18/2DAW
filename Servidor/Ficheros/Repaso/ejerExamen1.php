<?php 
$ruta = "datos.ex";
$archivo = fopen($ruta,"r");

function sacar($archivo){
    $arrayArch = [];
    while (!feof($archivo)) {
        $linea = fgets($archivo);
        if ($linea !== false) {
        $arrayArch[] = explode(" ",$linea);
        }
    }
    return $arrayArch;
}

function generar($arrayArch){
    $dominio = "@iesfuentesanluis.org";
    $arrayCorreos = [];

    foreach ($arrayArch as $persona) {
        $nombre = "";
        $apellidos = "";

        if (isset($persona[3])) {
            $nombre = substr($persona[0],0,1) . substr($persona[1],0,1);
            $apellidos = strtolower($persona[2]) . strtolower($persona[3]);
        } else {
            if (!empty($persona[0])) {
                $nombre = substr($persona[0],0,1);
            }
            if (!empty($persona[1])){
                $apellidos .= strtolower($persona[1]);
            } 
            if (!empty($persona[2])){
                 $apellidos .= strtolower($persona[2]);
            }
        }

        $email = $nombre . "." . trim($apellidos) .trim($dominio);
        $arrayCorreos[] = $email;
    }

    return $arrayCorreos;
}

function subir($arrayCorreos){
    $ruta = "emails.jul";
    $archivo = fopen($ruta,"w");

    foreach ($arrayCorreos as $key) {
        $txt = $key."\n";
        fwrite($archivo,$txt);
    }
}


$arrayArch = sacar($archivo);  
$arrayCorreos = generar($arrayArch);
subir($arrayCorreos);
print_r($arrayArch);
print_r($arrayCorreos);
?>