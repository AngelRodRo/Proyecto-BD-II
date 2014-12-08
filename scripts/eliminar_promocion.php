<?php 
	include("conexion.php");
	$cod_promocion = $_GET['cod_promocion'];
	$consulta = "DELETE FROM descuento_promocion WHERE cod_promocion='".$cod_promocion."'";
	sqlsrv_query($conexion,$consulta);
  	header('Location:../promocion.php');
?>