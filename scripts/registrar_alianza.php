<?php
	include'scripts/conexion2.php';
	$cod_alianza = $_POST['cod_alianza'];
	$nombre = $_POST['nombre'];

	$consulta = "exec insertar_alianza '".$cod_alianza."','".$nombre."'";
	$resultado=sqlsrv_query($conn,$consulta)

	//datos de usuario de prueba
/*	if (true) {	 
		header("Location: ../reservas.php");
		exit();
	}*/
/*if( $resultado ) {
     echo "Insercion realizada.<br />";
}else{
     echo "No se pudo insertar.<br />";
     die( print_r( sqlsrv_errors(), true));
}
*/
?>