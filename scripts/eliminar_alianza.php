<?php 
	include("conexion.php");
	$cod_alianza = $_GET['cod_alianza'];
	$consulta = "DELETE FROM alianza_aerea WHERE cod_alianza='".$cod_alianza."'";
	sqlsrv_query($conexion,$consulta);
  	header('Location:../alianza_aerea.php');
?>