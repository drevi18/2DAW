<?php
session_start();

echo "<h1>Loteria bySara</h1>";

if (!isset($_SESSION["loteria"])) {
    $_SESSION["premio"] = 0;
    $_SESSION["contador"] = 0;
    $_SESSION["loteria"] = [];

    for ($i = 0; $i < 5; $i++) {
        $_SESSION["loteria"][$i] = rand(1,15);
        echo $i;
    }
}

echo "Números premiados: ";
foreach ($_SESSION["loteria"] as $num) {
    echo $num . " ";
}
echo "<br><br>";

echo "El premio es de ".$_SESSION['premio']." euros <br>";
echo "Lo has intentado ".$_SESSION["contador"]." veces<br><br>";

echo "<form action='' method='post'>";
for ($i = 1; $i <= 15; $i++) {
    echo "<button style='display:inline-block; margin:5px;' name='num' value='$i'>$i</button>";
    if ($i % 4 == 0) echo "<br>";
}
echo "</form>";

if (isset($_POST["num"])) {
    if ($_SESSION["contador"] >= 5) {
       echo "<h2>Ya has usado todos tus intentos, la loteria se ha terminado</h2>";
       $_SESSION["premio"] = 0;
       $_SESSION["contador"] = 0;
       $_SESSION["loteria"] = [];
    } else {
        $_SESSION["contador"] += 1;

        if (in_array($_POST["num"], $_SESSION["loteria"])) {
            $_SESSION["premio"] += 1000;
        }
    }
}
?>
