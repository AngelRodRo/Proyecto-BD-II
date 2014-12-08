<?php
	include'conexion.php';
	$cod_pais = $_POST['cod_pais'];
	$nombre_pais = $_POST['nombre_pais'];
	$descripcion_pais = $_POST['descripcion_pais'];

	$consulta = "insert into pais values('{$nombre_pais}','{$cod_pais}','{$descripcion_pais}')";
	$respuesta = sqlsrv_query($conexion,$consulta);
	if( $respuesta) 
	{
    	header('Location:../pais.php');
	}
	else
	{
		echo 'Ha ocurrido un error: ';
		die( print_r( sqlsrv_errors(), true) );
	}
?>