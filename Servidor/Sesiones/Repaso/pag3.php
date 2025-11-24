<?php
session_start();

if (isset($_POST["pag2"])) {
    header("Location: ./pag1.php");
}

if (!isset($_POST["pag2"]) && isset($_SESSION["usuario"])) {
    $_SESSION["creditos"] += 10;
}
echo "<h1>Hola! ya estas en la última página ".$_SESSION['usuario']."</h1>";
echo "<h2>Tienes por ahora ".$_SESSION['creditos']." créditos</h2>";






?>

<form action="" method = "post">
    <button name="pag2">Volver al login</button>
</form>