<?php
session_start();

if (!isset($_SESSION["posicion"])) {
    $_SESSION["posicion"] = 0;
}

$px = $_SESSION["posicion"] + 300; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mover punto</title>
    <style>
        .form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .linea{
            width: 600px;
            height: 4px;
            background: black;
            position: relative;
            margin: 50px auto;
        }

        .punto{
            width: 14px;
            height: 14px;
            background: red;
            border-radius: 50%;
            position: absolute;
            top: -5px;
            left: <?= $px ?>px;
        }
    </style>
</head>
<body>

<form class="form" method="post" action="moverPunto.php">
    <div>
        <button type="submit" name="atras">←</button>
        <button type="submit" name="delante">→</button>
        <button type="submit" name="reiniciar">Volver al centro</button>
    </div>

    <div class="linea">
        <div class="punto"></div>
    </div>
</form>

</body>
</html>
