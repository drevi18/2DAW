<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            border: 1px solid black;
        }

        #caja{
            width: 30%;       
            height: 30%;      
            border: 1px solid #999;
            padding: 2%;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;

        }

        #rellenar input{
            width: 90%;
            padding: 2%;
        }
        #Recordar {
            display: flex;
            align-items: center;
            height: 10%;
        }

        #Recordar h2{
            width: 70%;
        }

        #Recordar input{
            width: 20%;
            display: flex;
        }

        button{
            width: 40%;
            height: 40px;
            font-size: medium;

        }
        #incorrecto{
            color: red;
        }

    </style>
</head>
<body>

    <div id ="caja">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <div id="rellenar">
                <input type="text" placeholder="Username" name = "usuario" <?php ?>><br>
                <input type="text" placeholder="Contraseña" name="contraseña"><br>
            </div>
            <div id="Recordar">
                <h2>Recordar</h2> 
                <input type="checkbox" name="recordar">
            </div>
        <button type="submit" name="enviar">Envia!</button>
        </form>
        
    </div>
    
    <?php 
    if (isset($_SESSION["incorrecto"])) {
        if ($_SESSION["incorrecto"] == true) {
            echo "<h1 id ='incorrecto'> Este usuario o esta contraseña estan incompletos, intentalo de nuevo</h1>";
        }
        
        unset($_SESSION["incorrecto"]);
    }
    ?>
</body>

</html>