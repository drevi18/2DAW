<?php 
$robot = "1 5W;1 1|2 1x1 1x2 1|;1@4 1U4 1@;1 1|2 3=2 1|;2 1\\5_1/";

$arrayRobot = explode(";", $robot);
echo "<pre>";

foreach ($arrayRobot as $linea) {
     $resultado = "";

     $arrayLinea = explode(' ', $linea);

     foreach ($arrayLinea as $key) {
        # code...
     }

}



?>