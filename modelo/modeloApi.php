<?php
//clase ModeloApi
class ModeloApi{
	//variable que se van a usar en toda clase
    private $url;
	private $decodes;
	//constructor donde declaramos la url de donde se va a sacar la información
	public function __construct(){
		$this->url = 'https://catfact.ninja/fact/';
	}

	public function extraer(){
		//$datos va a guardar la decodificación del json
		$datos = json_decode(file_get_contents($this->url), true );
		//guardamos el json decodificado como arreglo en decodes
		$this->decodes[] = $datos;
		//al momento de invocar el metodo extraer regresara el arreglo
		return $this->decodes;
	}
}
?>