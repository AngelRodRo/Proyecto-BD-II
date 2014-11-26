<?php 

	include("conexion.php");

	$ciudad_origen=!empty($_POST['ciudado'])?$_POST['ciudado'] : '';
	$ciudad_destino=!empty($_POST['ciudadd'])?$_POST['ciudadd'] : '';
	
	$consulta_busqueda = "EXEC buscar_reserva '$ciudad_origen','$ciudad_destino'";

	$resultado = sqlsrv_query($conexion,$consulta_busqueda) or 
				die('No se pudo ejecutar la consulta');



	$tabla = "";
	 
	while($linea=sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)){
				$tabla.="<tr>";
				$tabla.="<td>{$linea['Codigo']}</td>";
				$tabla.="<td>{$linea['Nombre de pasajero']}</td>";
				$tabla.="<td>{$linea['Apellido Materno']}</td>";
 
				$tabla.="<td>{$linea['Sexo']}</td>";
				$tabla.="<td>{$linea['Numero de telefono']}</td>";
				$tabla.="<td>{$linea['Codigo de pasaje']}</td>";
				$tabla.="<td>{$linea['Codigo de reserva']}</td>";
				$tabla.="<td>{$linea['Numero de asiento']}</td>";
				$tabla.="<td>{$linea['Numero de vuelo']}</td>";
				$tabla.="<td>{$linea['Ciudad de origen']}</td>";
				$tabla.="<td>{$linea['Ciudad de destino']}</td>";
				$tabla.="</tr>";
			}





 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vuelos reservados</title>
</head>
<body>
	<table border="1">
	<caption>Vuelos reservados</caption>
	<tr>
			<th>Codigo</th>
			<th>Nombre de pasajero</th>
			<th>Apellido Materno</th>
			<th>Sexo</th>
			<th>Numero de telefono</th>
			<th>Codigo de pasajero</th>
			<th>Codigo de reserva</th>
			<th>Numero de asiento</th>
			<th>Numero de vuelo</th>
			<th>Ciudad de origen</th>
			<th>Ciudad de destino</th>
		</tr>
	<?php
		echo $tabla;
	  ?>
		
	</table>
</body>
<footer>
	Derechos reservados - 2014
</footer>
</html>