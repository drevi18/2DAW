<form action="" method="post">
    <input type="number" name="tamaño" placeholder="Tamaño"><br>
    <input type="color" name="color"><br>
    <button name="dibujar">Dibujar</button>
</form>

<?php 
if (isset($_POST["dibujar"])) {
    $tam = round($_POST["tamaño"]);
    $color = $_POST["color"];
    $red = round($tam / 2); 

    echo '<div>';

    for ($i = 1; $i <= $tam; $i++) {
        for ($j = 1; $j <= $tam; $j++) {
            if ($i == $red || $j == $red) {
                echo "<span class='celda' style='background-color:$color;'></span>";
            } else {
                echo "<span class='celda'></span>";
            }
        }
        echo "<br>";
    }

    echo '</div>';
}
?>

<style>
.celda {
    display: inline-block;
    width: 20px;
    height: 20px;
    margin: 1px;

}
</style>
