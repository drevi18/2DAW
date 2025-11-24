<?php 

if (isset($_POST["mandar"])) {
    $num = $_POST["numero"];
    $result = espar($num);
}

function espar($num) : bool{
    $par = false;
    if ($num % 2 == 0) {
        $par = true;
    }

    return $par;

}


if ($result == true) {
    echo "<h2>El número $num es par</h2>";
}else {
    echo "<h2>El número $num es impar</h2>";

}

?>

<form action="" method = "post">
    <h2>Mete un número</h2>
    <input type="number" name="numero">
    <button name="mandar">Mandar</button>

</form>