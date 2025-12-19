<?php 
session_start();
$arrayPos = array_fill(0, 3, null);

if (!isset($_SESSION["monedas"])) {
    $_SESSION["monedas"] = 0;
}

if (isset($_POST["mas"])) {
    $_SESSION["monedas"] += 1;
}

if (isset($_POST["jugar"])) {
    if ($_SESSION["monedas"] <= 0) {
        echo "No tienes dinero, pobre";
    }else{
        $_SESSION["monedas"] -= 1;

        $arrayPos[0]= rand(1,5);
        $arrayPos[1]= rand(1,5);
        $arrayPos[2]= rand(1,5);
        
        if ($arrayPos[0] == $arrayPos[1] && $arrayPos[1] == $arrayPos[2]) {
            header("Location: ./ganado.php");
        }
    }
}





?>

<style>
.caja{
    width: 500px;
    height: 200px;
    display: flex;
    justify-content: center; /* Centra todo horizontalmente */
    align-items: center;     /* Centra todo verticalmente */
    border: 1px solid black;
    gap: 10px;               /* Espacio entre imágenes y botones */
}

.img{
    display: flex;
    justify-content: center; /* Centra las imágenes dentro del div */
    align-items: center;
    gap: 10px;               /* Separación entre cada imagen */
}

.img table {
    border-collapse: collapse; /* Quita bordes dobles de la tabla */
}

.img td {
    width: 100px;  /* Tamaño fijo para cada celda */
    height: 100px;
    text-align: center;
    vertical-align: middle;
}

.img td img {
    width: 100px;  /* Ajusta tamaño de la imagen */
    height: 100px;
}

.botones{
    display: flex;
    flex-direction: column;
    justify-content: center; /* Centra botones verticalmente */
    align-items: center;     /* Centra botones horizontalmente */
    gap: 10px;
}

button{
    width: 60px;
    height: 60px;
}


</style>
<h1>Tragaperras</h1>
<div class ="caja">
<div class ="img">

    <table>
        <tr>
            <td><?php echo "<img src='img/".$arrayPos[0].".svg'"?></td>
            <td><?php echo "<img src='img/".$arrayPos[1].".svg'"?></td>
            <td><?php echo "<img src='img/".$arrayPos[2].".svg'"?></td>
        </tr>
    </table>
</div>
    <div class ="botones">
        
        <form action="" method="post">
            <button name="mas">+</button>
            <p><?php echo $_SESSION["monedas"] ?></p>
            <button name="jugar">Tirar</button>
        </form>
    </div>
</div>
    