<?php
session_start();

$_SESSION['id_usuario']=$_POST['usuario'];
$_SESSION['id_apellido']=$_POST['apellido'];
?>

<h2> CONTINUAMOS CON LA PÁGINA WEB </h2>

<a href="./final.php">Venga que ya estamos en el final del ejemplo</a>

<?php
session_start();
?>

<h2>ya estamos en el final</h2>

<?php
echo "El usuario : ".$_SESSION['id_usuario'];
echo "<br>";
echo "El apellido: ".$_SESSION['id_apellido'];

?>

<a href="./borrar.php">Vamos a borrar algunas variables sesión</a>
