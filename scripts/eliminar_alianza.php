<?php 
	include("conexion2.php");

	$cod_alianza = $_REQUEST['cod_alianza'];


	$consulta = "DELETE FROM reserva WHERE cod_alianza='$cod_alianza'";

	sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');


	header('Location:../reservas.php');

 ?>