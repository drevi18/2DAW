<?php
ob_start();
if (isset($_COOKIE["contador"])) {
    $contador = $_COOKIE["contador"] + 1;

} else {
    $contador = 1;

}

setcookie("contador", $contador, time() + 3600);

if ($contador == 1) {
    echo "<h1>Bienvenido a la página</h1>";
} else {
    echo "<h1>Has entrado a esta página $contador veces</h1>";
}
?>