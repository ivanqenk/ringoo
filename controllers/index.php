<?php
//Carga la funciones comunes top y footer
require('common.php');

//Carga el modelo para este controlador
require("models/index.php");

class Index extends Common
{
	public $IndexModel;

	function __construct()
	{
		//Se crea el objeto que instancia al modelo que se va a utilizar

		$this->IndexModel = new IndexModel();
		$this->IndexModel->connect();
	}

	function __destruct()
	{
		//Se destruye el objeto que instancia al modelo que se va a utilizar
		$this->IndexModel->close();
	}

	//Funcion mainpage que genera la pagina por default en caso de no existir el controlador
	function main()
	{

		$hello 	= "Hello World!";
		$this->view('index/main', compact('hello'));

	}

}