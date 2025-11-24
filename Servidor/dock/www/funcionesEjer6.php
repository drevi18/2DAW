<?php 

function digitos($num) : int {
    $texto = (string)$num;
    $cantidad = strlen($texto);
    return $cantidad;

}


function digitoN($num) : int {

    
}


function detras($num) : int {

    
}


function delante($num) : int {

    
}

if (isset($_POST["enviar"])) {

    $num = $_POST["numero"];

    echo "El número $num tiene".digitos($num)." dígitos en total" ;
}

?>

<form action="" method="post">
    <h2>Introduce un número de más de un dígito</h2>
    <input type="number" name="numero" placeholder="número">
    <button name="enviar">Enviar</button>
</form>

