<?php
session_start();

$posPrem = [5,5,5];
$cont = 0;
if (!isset($_SESSION["monedas"])) {
    $_SESSION["monedas"] = 0;
    $_SESSION["imagenes"] = [];
}

for ($i=0; $i < 5; $i++) { 
    //esto seria accediendo a las imagenes del fichero y metiendolas en el array
    $_SESSION["imagenes"] = $i;
    print_r($_SESSION["imagenes"]);
}
     
if (isset($_POST["meter"])) {
    $_SESSION["monedas"] += 1;
    echo "<h1>Tienes ".$_SESSION["monedas"]." tiradas restantes</h1>";
}

if (isset($_POST["jugar"])) {
    $_SESSION["monedas"] -= 1;
    echo "<h1>Tienes ".$_SESSION["monedas"]." tiradas restantes</h1>";
    if ($_SESSION["monedas"] < 0) {
        echo "<h1>Te has quedado sin intentos mete más monedas</h1>";
        $_SESSION["monedas"] = 0;
    }else {
        // foreach ($posPrem as $key => $value) {
    //     $value = rand(0,4);
    // } No se pq no me genera nnumero random lo voy a ahcer a mano
    $posPrem[0] = rand(0,4);
    $posPrem[1] = rand(0,4);
    $posPrem[2] = rand(0,4);
    echo "<h1>".$posPrem[0]." ".$posPrem[1]." ".$posPrem[2]."</h1>";
    //aqui ses mostrarian las img
    print_r ($posPrem);
    
    }
    
       if ($posPrem[0] == $posPrem[1] && $posPrem[0] == $posPrem[2]) {
        header("Location: ./ganado.php");
    }
}

$dir_img = "./eximg/";
//$imgFichero = $dir_img . basename($_FILES[])
//no me sale como accedera las imagenes del fichero
//no me sale ahora hacerlo con imágenes te lo voy a hacer para que se sepa que entiendo la lógica




?>
<form action='' method = 'post'>
    <button name ='meter'>Meter moneda</button>
    <button name ='jugar'>Jugar</button>


</form>

