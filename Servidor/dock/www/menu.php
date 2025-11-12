<?php
session_start();

echo "<h1>Curso Aules</h1>";
echo "<h1>".$_SESSION["id_nombre"]."</h1>";


if ($_SESSION["id_rol"] == "ROLE_ALUMNO") {
    echo "alumno";
}else {
    "profesor";
}

?>