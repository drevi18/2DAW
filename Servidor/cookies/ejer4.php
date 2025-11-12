<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method ="post">
        <p>Elige el color que quieras para la página</p>
        <input type="color" value="color">  
    </form>

    <?php
    ob_start();
    
    $color = $_POST["color"];
    setcookie("fondoColor",$color,time()+3600);
    if (isset($_COOKIE["fondoColor"])) {
        echo "Color elegido correctamente";
    }
    
    ?>
</body>
</html>