<?php 
ob_start();
setcookie("usuario","Sara", time()+3600);

if (isset($_COOKIE["usuario"])) {
    echo "Hola, " . $_COOKIE["usuario"];
} else {
    echo "Cookie creada. Recarga la página para verla.";
}

?>