<?php
	include("conexion.php");
	session_start();
	$consulta = "exec nueva_compra ";
	sqlsrv_query($conexion,$consulta);
	$consulta="select max(cod_compra) as cod_compra from compra";
	$resultado = sqlsrv_query($conexion,$consulta);
	while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
		$_SESSION['cod_compra'] = $linea['cod_compra'];
	}
	$cod_compra = $_SESSION['cod_compra'];
	for ($i=1; $i <= $_SESSION['nro_pasajes']; $i++) { 
			$identificacion = $_REQUEST["identificacion".$i];
			$tipo_identificacion = $_REQUEST['tipo_identificacion'.$i];
			$nombre = $_REQUEST['nombre'.$i];
			$apellido_paterno = $_REQUEST['apellido_paterno'.$i];
			$apellido_materno = $_REQUEST['apellido_materno'.$i];
			$datos = date_parse($_REQUEST['fecha_nacimiento'.$i]);
			$fecha_nacimiento = $datos['day']."-".$datos['month']."-".$datos['year'];
			$email = $_REQUEST['email'.$i];
			$sexo = $_REQUEST['sexo'.$i];
			$pais = $_REQUEST['pais'.$i];
			$cod_pasaje = $_REQUEST['pasajes'.$i];
			$consulta = " EXEC insertar_pasajero '{$identificacion}','{$tipo_identificacion}','{$nombre}','{$apellido_paterno}','{$apellido_materno}','{$fecha_nacimiento}','{$email}','{$sexo}','{$pais}'";
			$resultado = sqlsrv_query($conexion,$consulta);
			if($resultado ===false)
			{
				echo $consulta;
				die( print_r( sqlsrv_errors(), true) );
			}
			$consulta2 = "insert into detalle_compra values('{$cod_pasaje}','{$cod_compra}','{$identificacion}')";
			$resultado2 = sqlsrv_query($conexion,$consulta2) or
						die('No se pudo ejecutar la consulta de la compra'.print_r( sqlsrv_errors(), true));
	}
	header("Location: ../resultado_compra.php");
?>