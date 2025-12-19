<?php

/*******CONEXIÓN*********/
//crear una tabla usuarios con nombre password role


//   ' OR '1' = '1

$dsn = 'mysql:dbname=dbname;host=db:3306';
$usuario = 'test';
$contrasena = 'test';

if(isset($_POST["enviar"])){

$nom=$_POST["nombre"];
$pass=$_POST["password"];



    try {
       
        
        try {
            $conexion = new PDO($dsn, $usuario, $contrasena);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión Establecida con la BD en Docker";
        } catch (PDOException $e) {       //en caso de detectar un error lo muestra
            echo 'Falló la conexión: ' . $e->getMessage();
        }
       
    
        $sql = "SELECT * FROM usuarios WHERE nombre = '$nom' and password ='$pass'";
        
        echo $sql;
        $conexion = $conexion->query($sql);
        $resultados = $conexion->fetch(PDO::FETCH_ASSOC);

        if($resultados){
            print_r ($resultados);
            echo "<br>Se HA CONECTADO AL SISTEMA";

        }else{

             echo "<br>NO CONECTADO";

        }
        
       
    
    
    }catch(PDOException $e) {
        echo $e -> getMessage();
    }
    

}


?>

<form action="" method="post">

    <input type="text" name="nombre" placeholder="nombre" ><br>
    <input type="text" name="password" placeholder="password"><br>
    <input type="submit" name="enviar" value="Logearse">

</form>