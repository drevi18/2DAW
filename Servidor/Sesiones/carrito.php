    <?php 
    session_start();

    if(!isset($_SESSION["id_carrito"])){

    $_SESSION["id_carrito"]=[];
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

    </head>
    <body>
        <form action="" method="post">
        <h3>Teclado = 50$</h3><br>
        <input type="number" name="carrito[]" value="0">
        <input type="submit" name="comprar" value="comprar"><br>
        <h3>Ratón = 30$</h3><br>
        <input type="number" name="carrito[]" value="0">
        <input type="submit" name="comprar"  value="comprar"><br>
        <h3>Cpu = 100$</h3><br>
        <input type="number" name="carrito[]" value="0">
        <input type="submit" name="comprar"  value="comprar"><br>
        <h3>Tele = 500$</h3><br>
        <input type="number"name="carrito[]" value="0">
        <input type="submit" name="comprar"  value="comprar">
        </form>

        
    </body>
    <?php 
    if(isset($_POST["comprar"])){

    print_r($_SESSION);
    $_SESSION["id_carrito"]=$_POST["carrito"];

    $precios=[50,30,100,500];
    $prodPrec=[];
    $total=0;

    foreach ($_SESSION["id_carrito"] as $key => $cantidad) {
        $prodPrec[$key] = $cantidad * $precios[$key];
    }

    echo "<h1> Factura Productos </h1>";

    foreach ($_SESSION["id_carrito"] as $key2 => $cantidad2) {
        $total+=$prodPrec[$key2];
        if ($key2==0) {
            echo "<h3>| Teclados: ".$cantidad2." unidades a ".$precios[$key2]." = ".$prodPrec[$key2]."</h3>";
            echo "<form action='' method='post'><button type='submit' name='material' value='raton'>eliminar</button></form>";

        } elseif ($key2==1) {
            echo "<h3>| Ratones: ".$cantidad2." unidades a ".$precios[$key2]." = ".$prodPrec[$key2]."</h3>";
            echo "<form method='post'><button type='submit' name='material' value='raton'>eliminar</button></form>";

        }elseif ($key2==2) {
            echo "<h3>| CPU: ".$cantidad2." unidades a ".$precios[$key2]." = ".$prodPrec[$key2]."</h3>";
            echo "<form method='post'><button type='submit' name='material' value='raton'>eliminar</button></form>";

        }elseif ($key2==3) {
            echo "<h3>| Televisores: ".$cantidad2." unidades a ".$precios[$key2]." = ".$prodPrec[$key2]."</h3>";
            echo "<form method='post'><button type='submit' name='material' value='raton'>eliminar</button></form>";

        }

    }
    echo "<h3>| Total = ".$total." </h3>";




    }
    ?>
    </html>

