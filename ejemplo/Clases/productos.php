<?php 
/*
Zapatillas
Marca,Precio,Color
Mostrar,Vender
Remeras
Marca,Precio,Color,Talle
Mostrar,Vender,Personalizar
*/
abstract class Productos{
	protected $marca;
	protected $precio;
	protected $color;
	protected function mostrar(){

	}
	abstract function vender();
}
class Zapatilla extends Productos{
	public function vender(){
		echo "Vendiendo";
	}
}
class Remeras extends Productos{
	private $talle;
	private $tipo;
	private function Personalizar(){

	}
	public function vender(){
		echo "Vender";
	}
}
class Pantalones extends Productos{
	private $tipo;
	public function vender(){
		echo "Vendiendo cosas";
	}
}

?>