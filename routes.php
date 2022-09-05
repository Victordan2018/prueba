<?php
//funcion que llama al controladodr y su respectiva accion, que se pasan como parametros
function call($controller, $action){
	//importa el controlador desde la capreta controlador
	require_once 'controlador/controlador' . $controller . '.php';
	//crea el controlador
	switch ($controller) {
		case 'Principal':
			$controller = new ControladorPrincipal();
			break;
		case 'Api':
			$controller = new ControladorApi();
			break;
		case 'Layout':
			$controller = new ControladorLayout();
		break;
	}
	//llama a la accion del controlador
	$controller->{$action}();
}
	//Arreglo con los controladores y sus acciones o metodos
	$controllers = array('Principal'=>['index', 'etc','guarda'], 'Api'=>['index'], 'Layout'=>['index']);
	//checa que el controlador enviado desde index.php este en el areglo controllers
	if(array_key_exists($controller, $controllers) && in_array($action, $controllers[$controller])){
		//checa que el arreglo controllers con la clave que es la variable controller del indx exits la accion
		//llama a la función call y le pasa el controlador a llamar y la accion(metodo) que esra dentro del controlador
		call($controller, $action);
	}else{//manda el nombre del controlador y la pagina que quiera
		call('Layout', 'error');	
	}
?>