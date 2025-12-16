<?php
session_start();

if (isset($_POST["atras"])) {
    $_SESSION["posicion"] -=20;
}elseif (isset($_POST["delante"])) {
    $_SESSION["posicion"] += 20;
}elseif (isset($_POST["reiniciar"])) {
    $_SESSION["posicion"] = 0;
}

if ($_SESSION["posicion"] > 300) {
    $_SESSION["posicion"] = -300;
} elseif ($_SESSION["posicion"] < -300) {
    $_SESSION["posicion"] = 300;
}

header("Location: htmlMoverPunto.php");
?>