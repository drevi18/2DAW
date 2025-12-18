<?php 
if (isset($_POST["enviar"])) {
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    $resultado = calcArea($base,$altura);
    echo $resultado;
}


function calcArea($base,$altura):float{
$area = ( $base * $altura )/2;
return $area;
}

?>

<form action="" method = "post">
    <input type="number" name="base" placeholder ="base">
    <input type="number" name="altura" placeholder="altura">
    <button name ="enviar">Enviar</button>

</form>