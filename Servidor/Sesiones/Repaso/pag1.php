<?php
session_start();

if (isset($_POST["boton"]) && !empty($_POST["nombre"])) {
    $_SESSION["usuario"] = $_POST["nombre"];
    $_SESSION["creditos"] = 0;
    header("Location: ./pag2.php");
}
?>

<form action="" method="post">
    <input type="text" name="nombre" placeholder="Nombre">
    <button name="boton">Enviar</button>
</form>
