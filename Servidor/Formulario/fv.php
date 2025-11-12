<?php

$numeros = $_POST["n"];
$suma =0;

foreach ($numeros as $num) {
    $suma +=$num;
}

echo "<h3>El resultado de la suma es = ".$suma."</h3>";
?>