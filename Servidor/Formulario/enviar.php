<?php
/*$nombre= $_GET["nombre"];
$email= $_GET["email"];
$boton = $_GET["boton"];
echo "nombre {$nombre} email {$email} botón {$boton}";*/

/*print_r($_POST["curso"]);

foreach ($_POST["curso"] as $key => $value) {
    echo $value;
}*/

echo "<h3>Nombre y apellidos</h3>";
echo $_POST["nombre"]." ".$_POST["apellido"];

echo"<h3>Contraseña</h3>";
echo $_POST["contra"];

echo"<h3>Eres</h3>";
echo $_POST["elegir"];

echo"<h3>Actividad favorita</h3>";
$actividad = $_POST["actividad"];
foreach ($actividad as $key => $value) {
    echo $value." ";
}

echo"<h3>Género</h3>";
echo $_POST["genero"];

echo"<h3>Edad</h3>";
echo $_POST["edad"];

echo"<h3>Algo que quieras decir</h3>";
echo $_POST["area"];

echo"<h3>Color</h3>";
$color = $_POST["color"];
echo "<p style = 'background-color: $color; width:90px; height: 30px'>".$color."</p>" ;




