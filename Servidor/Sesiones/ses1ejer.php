<?php 
session_start();

$_SESSION["id_nombre"]=$_POST["nombre"];
$_SESSION["id_apellido"]= $_POST["apellido"];

echo "<h2>Tu nombre : ".$_SESSION["id_nombre"]."</h2>";
echo "<h2>Tu apellido : ".$_SESSION["id_apellido"]."</h2>";

?>