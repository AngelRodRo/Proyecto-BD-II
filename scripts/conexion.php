<?php 
	$servidor="USUARIO-PC";
	$opciones = array( "Database"=>"Agencia_Viajes", "UID"=>"sa", "PWD"=>"123456");

	$conexion = sqlsrv_connect($servidor,$opciones) or 
				die("No se pudo conectar al servidor");
 ?>