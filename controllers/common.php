<?php
require './vendor/autoload.php';
class Common 
{
	protected $Model;

	//Hacer la inyeccion del modelo que vamos a utilizar
	function __construct(Connection $Model)
	{
		$this->Model = $Model;
		$this->Model->connect();
	}

	function __destruct()
	{
		//Se destruye el objeto que instancia al modelo que se va a utilizar
		$this->Model->close();
	}

	function top()
	{
		//carga la vista que contiene el top
		require('views/partial/top.php');
	}

	function footer()
	{
		//carga la vista que contiene el footer
		require('views/partial/footer.php');
	}

	//Genera el contenido cambiante, donde $f es la variable que contiene el nombre del controlador que va a cargar
	//si el controlador existe lo carga caso contrario lo que cargara sera un controlador por default que contiene
	//la pagina default principal
	function content($f)
	{	
		if(isset($f))
		{
			$this->$f();
		}
		else
		{
			$this->mainPage();
		}		
	}

	//Funcion que crea las vistas renderizadas con Twig
	protected function view($url, $vars)
	{
		$loader = new Twig_Loader_Filesystem('./views');
		$twig = new Twig_Environment($loader, []);
		echo $twig->render($url . '.view', $vars);
	}

}