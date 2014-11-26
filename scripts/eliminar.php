<?php 
	include("conexion.php");

	$cod_reserva = $_REQUEST['cod_res'];


	$consulta = "DELETE FROM reserva WHERE cod_reserva='$cod_reserva'";

	sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');


	header('Location:../reservas.php');

 ?>