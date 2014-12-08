<?php 
	include("conexion.php");
	$cod_pais = $_GET['cod_pais'];
	$consulta = "DELETE FROM pais WHERE cod_pais='".$cod_pais."'";
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