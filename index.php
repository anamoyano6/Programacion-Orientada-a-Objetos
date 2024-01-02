<?php

class Moto{
    private $modelo = "Spark"; 
    private $año = "2023";
    private $color = "Rojo";
    public function getDatos(){
        $datos = array(
            "modelo"=>$this->modelo,
            "año"=>$this->año,
            "color"=>$this->color,
        );
        return $datos;
    } 
    public function encender(){
        echo "Encendiento".$this->modelo;

    }
    function acelerar(){

    }
    function saltar(){

    }

}
$moto = new Moto();
var_dump($moto->getDatos());
echo $moto->encender();


?>
