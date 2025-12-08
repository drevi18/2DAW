<?php 
 
 class Conecta{

    private array $arrayConecta;


    public function __construct(){
        $this->$arrayConecta = [[],[],[],[],[],[],[]];
    }

    public function CrearJugador($jugador){
        $jugador = rand(1,2);
    }

    public function InsertarValor($pos,$valor,$jugador){
        $this->$arrayConecta[$pos][]=$valor;
        if ($jugador == 1) {
            $jugador = 2;
        }else{
            $jugador = 1;
        }
        return $jugador

    }

    public function ComprobarGanador(){
        

    }




 }

 $conecta = new Conecta();


?>