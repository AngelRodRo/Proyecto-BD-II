<?php 
	include("conexion.php");
	$cod_pais = $_GET['cod_pais'];
	$consulta = "DELETE FROM pais WHERE cod_pais='".$cod_pais."'";
	$respuesta = sqlsrv_query($conexion,$consulta);
   	header('Location:../pais.php');
?>