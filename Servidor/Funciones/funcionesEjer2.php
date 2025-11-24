<?php 

    if (isset($_POST["enviar"])) {
        $tam = $_POST["tam"];
        $min = $_POST["min"];
        $max = $_POST["max"];
        $array = arrayAleatorio($tam,$min,$max);
    }

    function arrayAleatorio($tam,$min,$max) : array{
        $arraynuevo =[];
        for ($i=0; $i < $tam; $i++) { 
            $arraynuevo[$i] = rand($min,$max);
        }

        return $arraynuevo;
    }

    if (isset($array)) {
        foreach ($array as $key) {
            echo $key."<br>";
        }
    }

?>

<form action="" method = "post">
    <input type="number" name="tam" placeholder= "Tamaño del array">
    <input type="number" name="min" placeholder= "número mínimo">
    <input type="number" name="max" placeholder="número maximo">
    <button name= "enviar">Enviar</button>
</form>