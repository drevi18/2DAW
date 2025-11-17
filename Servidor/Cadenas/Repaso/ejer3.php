<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
        <input type="text" name = "frase">
        <input type="submit" value= "enviar">
    </form>
</body>
</html>

<?php 

$frase ="";
$a = 0;
$e = 0;
$i = 0;
$o = 0;
$u = 0;

if (isset($_POST["frase"])) {
    $frase = $_POST["frase"];    
}

$arrayFrase = explode(" ",$frase);

foreach ($arrayFrase as $key => $value) {
    for ($i=0; $i < strlen($value) ; $i++) { 
        $char = strtolower($value[$i]);
        $a = $a + substr_count("a", $char);
        $e = $e + substr_count("e", $char);
        $i = $i + substr_count("i", $char);
        $o = $o + substr_count("o", $char);
        $u = $u + substr_count("u", $char);
    }
}

echo "a: ".$a." e: ".$e." i: ".$i." o: ".$o." u: ".$u;

?>