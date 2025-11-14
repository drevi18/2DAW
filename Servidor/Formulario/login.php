<?php 
ob_start();
session_start();



$usuarios=[ ['usuario'=>'estefania','password'=>'1111', 'nombre'=>'Estefania Maestre','rol'=>'ROLE_ALUMNO'],

 ['usuario'=>'julio','password'=>'2222', 'nombre'=>'Julio Noguera','rol'=>'ROLE_PROFE'],

 ['usuario'=>'jose','password'=>'4444', 'nombre'=>'José Vicente','rol'=>'ROLE_ALUMNO'],

 ['usuario'=>'ana','password'=>'333', 'nombre'=>'Ana Fuertes','rol'=>'ROLE_ALUMNO'],

 ['usuario'=>'admin','password'=>'999', 'nombre'=>'Administrador','rol'=>'ROLE_PROFE'],

];


$user = $_POST["usuario"];  
$contra = $_POST["contraseña"];
$recordar = $_POST["recordar"];
$_SESSION["id_recordar"] = $_POST["recordar"];
$contador = 0;
$i = 0;

if (empty($user) || empty($contra)) {
    $_SESSION["incorrecto"] = true;
    header("Location: ./aules.php");
}else{
    while ($encontrado == false && $contador < count($usuarios)){
        if ($usuarios[$contador]["usuario"] == $user && $usuarios[$contador]["password"] == $contra ) {
            $encontrado = true;
            $i = $contador;
        }
            $contador ++;
     
    }
    $_SESSION["incorrecto"] = false;
}

if ($encontrado == true) {
    $_SESSION["id_user"] = $user;
    $_SESSION["id_rol"] = $usuarios[$i]["rol"];
    $_SESSION["id_nombre"] = $usuarios[$i]["nombre"];
    header("Location: ./menu.php");
    if (isset($_SESSION["id_recordar"])) {
        setcookie("recordar",$_SESSION["id_user"], time()+5);
    }

}else {
    header("Location: ./aules.php");
}



?>


