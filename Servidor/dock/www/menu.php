<?php
ob_start();
session_start();

echo "<div><h1>Curso Aules</h1></div>";
echo "<div id='nombre'><h1>".$_SESSION["id_nombre"]."</h1></div>";


if ($_SESSION["id_rol"] == "ROLE_ALUMNO") {
    echo "<h3>Menu de alumno</h3>";
}else if ($_SESSION["id_rol"] == "ROLE_PROFE"){
        echo "<h3>Menu de profesor</h3>";

}


?>

<a href="./logout.php">Logout</a>