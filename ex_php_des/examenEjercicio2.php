<?php 
session_start();



if(!isset($_SESSION["jugar"])){
    $caballo = 1;
    $avanzar = 0;
    $posCaballo = 0;
    $_SESSION["jugar"]= [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
}
print_r($_SESSION["jugar"]);



echo "<form action='' method = 'post'>";
for ($i=0; $i < 20; $i++) { 
    echo "<div class = 'casillas' name = '$i'></div>";
}
echo "<button name = 'correr'>correr</button>";
echo "<button name = 'reset'>reset</button>";

echo "</form>";

 if ($posCaballo == 0) {
     $arrayPos[0] = $caballo;
 }
 
 if (isset($_POST["correr"])) {
     $avanzar = rand(1,4);
     $posCaballo +=  $avanzar;
     echo "pos caballo $posCaballo";
     if ($posCaballo < 19) {
         foreach ($arrayPos as $celda => $num) {
             if ($celda == $posCaballo) {
                 $arrayPos[$celda] = $caballo;
             }else {
                 $arrayPos[$celda] = 0;
             }
             echo $posCaballo;
         }
         echo "<h2>Has avanzado $avanzar posiciones</h2>";
     }else {
        echo "<h2>Has ganado</h2>";
        $_SESSION["jugar"] = [];
     }
 }
 
 if (isset($_POST["reset"])) {
     $_SESSION["jugar"]= [];
    }
    
    print_r( $_SESSION["jugar"]);
?>

<style>

    *{
     
    }
</style>

