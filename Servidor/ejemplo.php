<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./enviar.php" method = "post">
        <!-- <input type="text" name="nombre" id="">
        <input type="text" name="email" id="">

        <input type="submit" name="boton" value="enviar"> -->

        <input type="checkbox" name="curso[]" value="DAW">
        <input type="checkbox" name="curso[]" value="ASIR">
        <input type="checkbox" name="curso[]" value="DAM">
        <input type="checkbox" name="curso[]" value="3D">

        <input type="button" name="boton" value="enviar">

    </form>
</body>
</html>