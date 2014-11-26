<?php 
	include("scripts/conexion.php");
	$codigo = $_REQUEST['codigo'];

	$consulta = "EXEC mostrar_pasajeros";
	$resultado = sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>
		<img src="" alt="">
	</div>
	<div>

	<?php 
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
				$tabla.="<td><a href='pasajero.php?codigo=$linea[Codigo]'>Mostrar</a></td>";
				$tabla.="</tr>";
			}

	 ?>
		<div>
			<label for="nombre">Nombre : </label>
			<label for="apellido_p">Apellido Paterno :</label>
			<label for="apellido_m">Apellido Materno :</label>

			<span></span>

		</div>
		<div></div>
	</div>
</body>
</html>