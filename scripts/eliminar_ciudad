<?php 
	include("conexion.php");
	$cod_ciudad = $_GET['cod_ciudad'];
	$consulta = "DELETE FROM ciudad WHERE cod_ciudad='".$cod_ciudad."'";
	$respuesta = sqlsrv_query($conexion,$consulta);
   	header('Location:../ciudad.php');
?>