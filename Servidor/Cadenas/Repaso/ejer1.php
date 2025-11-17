<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
        <input type="text" name ="frase">
    </form>
</body>
</html>

<?php 

$frase ="";
$nueva ="";
 
if (isset($_POST["frase"])) {
    $recoger = $_POST["frase"];
    $frase = trim(strtolower($recoger));
}

echo $frase. "<br>";
$long = strlen($frase);

for ($i=0; $i < $long ; $i++) { 
    $char = $frase[$i];
    if ($i % 2 == 0) {
        $nueva .= strtoupper($char);
    }else {
        $nueva .= $char;
    }
}

echo $nueva; 
?>