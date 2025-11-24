
<?php
//Esencial porque si no falla a veces 
ob_start();
if(isset($_COOKIE['entrada'])){
    echo '<h1 style=" color:blue">Bienvenido</h1>';
}else{
    setcookie("entrada", '1', time() + 100);
    echo '<h1>Bienvenido</h1>';
}
?>

<?php
    if(isset($_COOKIE['valor'])){
        setcookie('valor', $_COOKIE['valor']++);
        echo "Veces entrada ". $_COOKIE['valor'];
    }else{
        //Nombre    valor   y tiempo que dura
        setcookie("valor", 0 , time()+ 31536000);    
    }

?>