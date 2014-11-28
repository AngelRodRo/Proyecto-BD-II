<?php 
	include("conexion.php");
	$cod_pais = $_GET['cod_pais'];
	$consulta = "DELETE FROM pais WHERE cod_pais='".$cod_pais."'";
	sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');
	header('Location:../pais.php');
?>