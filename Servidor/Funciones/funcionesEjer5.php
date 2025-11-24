<?php

    function concatenar(...$palabras) : string {
        return implode(" ", $palabras);
    }

    
    $resultado = concatenar("hola","que","tal","yo","bien");

    echo $resultado;

?>