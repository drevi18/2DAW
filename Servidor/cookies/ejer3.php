<?php
ob_start();
setcookie("1min", "minuto", time()+60);
setcookie("1hora","hora", time()+3600);
setcookie("1dia","dia",time()+86400);

?>