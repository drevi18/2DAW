<?php
session_start();

if (!isset($_SESSION["posX"]) && !isset($_SESSION["posY"])) {
    $_SESSION["posX"] = 0;
    $_SESSION["posY"]= 0;
}

$pxX = $_SESSION["posX"] +200;
$pxY =  $_SESSION["posY"] +200;
?>

<style>
    .caja{
        border:1px solid black;
        position:relative;
        width: 400px;
        height: 400px;
    }

    .punto{
        background-color:red;
        width: 4px;
        height:4px;
        position:absolute;
        left: <?= $pxX?>;
        top: <?= $pxY?>;
    }
</style>
<div>

    <form action="mov2.php" method="post" class ="form">
        <input type="submit" name="arriba" value="↑">
        <input type="submit" name="derecha" value="→">
        <input type="submit" name="volver" value="Centro">
        <input type="submit" name="abajo" value="↓">
        <input type="submit" name="izquierda" value="←">
        
    </form>

    <div class="caja">
    <div class="punto"></div>
    </div>
</div>