<?php

function mayor():int{
    $array = func_get_args();
    $mayor = $array[0];
    for ($i=0; $i < count($array); $i++) { 
        if ($array[$i] >= $mayor) {
            $mayor = $array[$i];
        }    
    }

    return $mayor;
}

$mayor = mayor(10,20,55,50,30);

echo "El número más grande del array es $mayor";
?>