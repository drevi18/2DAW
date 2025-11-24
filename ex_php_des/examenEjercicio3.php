<?php 

if (isset($_POST["boton"])) {
    if (empty($_POST["tamanyo"]) || $_POST["tamanyo"] < 1 || $_POST["tamanyo"] > 25 ) {
        echo "<h1>Escribe un parametro correcto</h1>";
    }else {
        for ($i=1; $i <= $_POST["tamanyo"] ; $i++) { 
            $tamanyo = $i;
        }
        
        for ($i=0; $i <= $tamanyo ; $i++) { 
           echo "<div class = 'pintar'>
            <div class = 'x'></div>
            <div class = 'y'></div>
           </div>";
        }

    }
}



?>

<form action="" method = "post">
<p>Tamaño (1 a 25)</p><input type="number" name= "tamanyo">
<p>Color</p> <input type="color" name="color"><br>
<button name="boton">Dibujar</button>

</form>

<style>

.pintar{
    width: 50px;
    height: 50px;
}

.x{
    width: 5px;
    height: 5px;
    background-color: <?php $_POST["color"]?>;

}

.y{
    width: 5px;
    height: 5px;
    background-color: <?php $_POST["color"]?>;

}
</style>
