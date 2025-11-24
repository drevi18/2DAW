<?php 
ob_start();
setcookie("usuario","nuevo", time()+10);
$count;

if (!isset($_COOKIE["usuario"])) {
    echo "<h1>Bienvenido nuevo usuario</h1>";
    $count = 1;
    setcookie("contador",$count, time()+10);
    echo "has entrado ".$count." veces";

}else{
    echo "<h1>Hola de nuevo</h1>";
    $count = $_COOKIE["contador"] +1;
    setcookie("contador", $count, time() + 10);
    echo "has entrado ".$count." veces";
}


?>