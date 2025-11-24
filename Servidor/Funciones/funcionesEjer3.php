<?php 

function arrayPares($array) : int{
    $cont = 0;
    foreach ($array as $key) {
        if ($key % 2 == 0) {
            $cont ++;
        }
    }
    return $cont;

}

$array = [1,2,3,4,5,6,7,8,9,10,0];

$pares = arrayPares($array);

echo "En el array hay en total $pares números pares";

?>

