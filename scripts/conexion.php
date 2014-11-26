<?php 
	$servidor="USUARIO-PC\SQLEXPRESS";
	$opciones = array( "Database"=>"AgenciaVuelos_BD", "UID"=>"Angel", "PWD"=>"123456");

	$conexion = sqlsrv_connect($servidor,$opciones) or 
				die("No se pudo conectar al servidor".FormatErrors(sqlsrv_errors()));
 ?>