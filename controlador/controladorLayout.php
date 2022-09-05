<?php
//clase ControladorLayout
class ControladorLayout{
	//constructor
	public function __construct(){
	}
	//funcion index que manda llamar la vista principal
	public function index(){
		require_once 'vista/vistaLayout.php';
	}
	//funcion error que manda llamar la vista del error de pantalla
	public function error(){
		require_once 'vista/error.php';
	} 
}
?>