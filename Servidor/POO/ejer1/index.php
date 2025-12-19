<?php
require_once "Animal.php";
require_once "Perro.php";
require_once "Gato.php";
require_once "PerroGuardian.php";
require_once "Vacuna.php";

$perro = new Perro("Canelón", "husky",4,2);
$gato = new Gato("Michi", "Siamés", 3);
$guardian = new PerroGuardian("blaqui","Pastor alemán",5,true,2);

echo $perro->getNombre() ." dice " . $perro->hacerSonido()."<br>";
echo $gato->getNombre() . " dice " . $gato->hacerSonido()."<br>";
echo $guardian->alertar()."<br>";
echo $gato->vacunar()."<br>";
echo $perro->mostrarPatas();
?>