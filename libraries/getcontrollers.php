<?php
//esta libreria genera y carga el controlador que se manda llamar desde la url, el archivo php y el controlador deben llamarse igual, 

//Carga las constantes
require 'libraries/define.php';

//Si el controlador existe lo instancia
$controller_file=strtolower($_GET['c']);
$method = $_GET['f'];

if (isset($_GET['c']) && file_exists( 'controllers/'.$controller_file.'.php')) 
{
	require 'controllers/'.$controller_file.'.php';
	require 'models/'.$controller_file.'.php';
	$model = $controller_file.'Model';

	$controller = new $_GET['c'](new $model);
}
elseif(isset($_GET['f']))//Si no existe el controlador pero hay una funcion
{
	echo CONTROLLER_NO_EXISTE;
}
else//Si no existe ni controlador ni funcion manda al index
{
	require 'controllers/index.php';
	require 'models/index.php';
	$controller = new Index(new IndexModel);
	$method = METODO_INICIAL;
}

	


