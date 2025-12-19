<?php
$ruta ="FichRep2.csv";
$archivo =fopen($ruta,"r") or die("Error al abrir archivo");

function recorrer($archivo){
    $arrayArch = [];
    while (!feof($archivo)) {
        $linea = fgets($archivo);
        if ($linea !== false && trim($linea) !== "") {
            $arrayArch[] = explode(",", trim($linea));
        }
    }
    return $arrayArch;
}

function nuevoFich($arrayArch){
    $txt = "";
    $ruta = "2FichRep2.csv";
    $arch2 = fopen($ruta,"w");
    if (isset($arch2)) {
        foreach ($arrayArch as $array) {
            $txt .= implode(",",$array);      
            $txt .= "\n";
        }
        fwrite($arch2,$txt);
       
        fclose($arch2);
        $arch2 = fopen($ruta,"r");
        while(!feof($arch2)){
            echo fgets($arch2),"<br>";
        }
    }

}


$arrayArch = recorrer($archivo);
nuevoFich($arrayArch);

if (isset($arrayArch)) {
    foreach ($arrayArch as $subArray) {
        foreach ($subArray as $info) {
            echo "<table>
                <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Correo</td>
        <td>Residencia</td>
                </tr>
                <tr>
                    <td>info1</td>
                    <td>info2</td>
                    <td>info3</td>
                    <td>info4</td>
                </tr>
            </table>";
        }
    }
}


?>
<style>
    table{
        border: 1px solid black;
    }
</style>
<table>
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
    </tr>
    <tr>
         <td>info1</td>
        <td>info2</td>
        <td>info3</td>
        <td>info4</td>
    </tr>
</table>