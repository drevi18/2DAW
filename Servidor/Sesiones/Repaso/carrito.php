<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
    <input type="text" placeholder= "Producto" name = "producto">
    <input type="number" placeholder ="Cantidad" name = "cantidad">
    <button name="comprar">Comprar</button>
    <button name="reset">Reset</button>
    </form>
    
</body>
</html>

<?php
if (!isset($_SESSION["productos"])) {
    $_SESSION["productos"] = [];
}

if ( isset($_POST["comprar"]) && empty($_POST["producto"]) && empty($_POST["cantidad"])) {
    echo "<h2 style = 'color:red'> Rellena los campos</h2>";
}
if (isset($_POST["comprar"]) && !empty($_POST["producto"]) && !empty($_POST["cantidad"])) {
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    if (!isset($_SESSION["productos"][$producto])) {
        $_SESSION["productos"][$producto] = $cantidad;
    }else{
        $_SESSION["productos"][$producto] += $cantidad;
    }

}

if (isset($_POST["reset"])) {
    $_SESSION["productos"] = [];
}

if (isset($_POST["borrar"])) {
    $_SESSION["productos"][$_POST["borrar"]] = 0;
}

echo "<h1>Lista productos</h1>";
foreach ($_SESSION["productos"] as $key => $value) {
    echo "<h2>$key y cantidad $value</h2><br>";
    echo " <form action='' method = 'post' > <button name='borrar' value = $key>Borrar</button></form>";

}




?>