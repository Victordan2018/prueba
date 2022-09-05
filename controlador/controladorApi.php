<?php
//crea una clase para tener todo organizado 
class ControladorApi{
	//creamos el constructor, en este caso se manda llamar el modelo donde tenemos los datos
	public function __construct(){
		require_once("modelo/modeloApi.php");		
	}
	//funcion que creamos para que haga las instrucciones de manera oranizada
	public function index(){
		//en variable $gatos, guardamos la instancia de la clase ModeloApi()
		$gatos = new ModeloApi();
		//el arreglo $arreglo lo identificamos como "gatitos" y guarda los datos del metodo extraer de la clase ModeloApi()
		$arreglo["gatitos"] = $gatos->extraer();
		//mandamos llamar a la vistaApi donde se mostrarar los datos
		require_once 'vista/vistaApi.php';
	}//metodo
}//clase

?>