<?php
//require("models/connection.php"); // funciones mySQL 
require("models/connection_sqli.php"); // funciones mySQLi

	class IndexModel extends Connection
	{
		public function metodo($val)
		{
			$myQuery = "SELECT fecha_pago FROM app_pagos WHERE id = $val";
			$res = $this->query($myQuery);
			$res = $res->fetch_object();
			
			return $res->fecha_pago;
		}
	}