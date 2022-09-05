<?php  
//clase
class ControladorPrincipal{
	//constructor
		public function __construct(){

		}
		//funcion para mostrar la vista principal
		public function index(){
			require_once 'vista/vistaPrincipal.php';
		}//index()
		//guarda() hace que las variables que ingresan en el formulario se guarden en variables, se forme un arreglo y posteriormente
		//se mandan a la vistaDatos para su impresión
		public function guarda(){
			$nombre = $_POST["nombre"];
			//se guarda un lugar en el arreglo con el indice nombre
			$datosCorrectos["nombre"] = $nombre;
			$edad = $_POST["edad"];
			//se guarda un lugar en el arreglo con el indice edad
			$datosCorrectos["edad"] = $edad;
			$correo = $_POST["email"];
			//se guarda un lugar en el arreglo con el indice correo
			$datosCorrectos["correo"] = $correo;
			$telefono = $_POST["telefono"];
			//se guarda un lugar en el arreglo con el indice telefono
			$datosCorrectos["telefono"] = $telefono;
			$grado = $_POST["grado"];
			//se guarda un lugar en el arreglo con el indice grado
			$datosCorrectos["grado"] = $grado;
			require_once 'vista/vistaDatos.php';
		}
		public function etc(){
			//si se hay un envio con el nombre "submit y el servidor tiene una petición "POST", empieza a ejecutar su contenido
			if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
				//valida que el nombre no este vacio
				if(empty($_POST["nombre"])){
					$errores[] = "El nombre es requerido";
				}
				//valida que la no este vacio
				if(empty($_POST["edad"])){
					$errores[] = "La edad es requerido";
				}
				//valida que el correo tenga la estrcutura
				if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])){
					$errores[] = "Formato de correo incorrecto";
				}
				//valida que el telefono no este vacio
				if(empty($_POST["telefono"])){
					$errores[] = "El telefono es requerido";
				}
				//valida que el grado no este vacio
				if(empty($_POST["grado"])){
					$errores[] = "El grado es requerido";
				}
				//si $errores existe y es distinto a null, se manda llamar a la vistaPrincipal, para mostrar los errores
				// de lo contrario manda llamar al metodo guarda() y se lleva los datos a otra pagina
				if(!empty($errores)){
					require_once 'vista/vistaPrincipal.php';	
				}else{
					$this->guarda();
				}
			}//if
		}//etc()
}//clase


?>