<?php
	include("conexion.php");
	session_start();
	$consulta = "exec nueva_reserva";
	sqlsrv_query($conexion,$consulta);
	$consulta="select max(cod_reserva) as cod_reserva from reserva";
	$resultado = sqlsrv_query($conexion,$consulta);
	while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
		$_SESSION['cod_reserva'] = $linea['cod_reserva'];
	}
	$identificacion = $_REQUEST["identificacion"];
	$tipo_identificacion = $_REQUEST['tipo_identificacion'];
	$nombre = $_REQUEST['nombre'];
	$apellido_paterno = $_REQUEST['apellido_paterno'];
	$apellido_materno = $_REQUEST['apellido_materno'];
	$datos = date_parse($_REQUEST['fecha_nacimiento']);
	$fecha_nacimiento = $datos['day']."-".$datos['month']."-".$datos['year'];
	$email = $_REQUEST['email'];
	$sexo = $_REQUEST['sexo'];
	$pais = $_REQUEST['pais'];
	$cod_pasaje = $_REQUEST['pasajes'];
	$_SESSION['pasaje'] = $cod_pasaje;
	$consulta = "EXEC insertar_pasajero '{$identificacion}','{$tipo_identificacion}','{$nombre}','{$apellido_paterno}','{$apellido_materno}','{$fecha_nacimiento}','{$email}','{$sexo}','{$pais}'";
	$resultado = sqlsrv_query($conexion,$consulta);
	/*if($resultado === false)
	{
		die( print_r( sqlsrv_errors(), true) );
	}*/
	$consulta2 = "update reserva set cod_pasajero = '{$identificacion}',cod_pasaje = '{$cod_pasaje}' where cod_reserva = '{$_SESSION['cod_reserva']}'";
	//echo $consulta2;
	$resultado2 = sqlsrv_query($conexion,$consulta2);/* or
				die('No se pudo ejecutar la consulta de la compra'.print_r( sqlsrv_errors(), true));*/

	header("Location: ../resultado_reserva.php");
?>