<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Alianzas Aereas</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Registros de Alianzas Aéreas</h1>
			<form action="scripts/registrar_alianza.php" method="POST">
				<table width=400px>
					<tr>
						<td>
							<label for="cod_aliaza">Código de Alianza:</label>
						</td>
						<td>
							<input type="text"  name="cod_alianza">
							<input type="text" id="identificacion" name="cod_alianza">
						</td>
					</tr>
					<td>
						<label for="nombre">Nombre :</label>
						</td>
						<td>
							<input type="text" name="nombre" id="nombre">
						</td>
					</tr>		
					<tr>
						<td>
							<input type="submit" value="Registrar">
							<input type="reset">
						</td>
					</tr>
				</table>
			</form>
			<table >
				<caption>Lista de Alianzas Aereas</caption>
				<tr>
					<th>Código de la Alianza Aerea</th>
					<th>Nombre de la Alianza Aerea</th>
					<th>Eliminar</th>
				</tr>
<?php 
	include("scripts/conexion.php");
	//Consulta en vista reservas_vuelo
	$consulta = "select * from alianza_aerea";
	//Ejecutando consultas
	$resultado = sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');
	$tabla = "";
	while($linea=sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)){
				$tabla .="<tr>";
				$tabla .="<td>".$linea['cod_alianza']."</td>";
				$tabla .="<td>".$linea['nombre_alianza']."</td>";
				$tabla .="<td><a href='scripts/eliminar_alianza.php?cod_alianza = ".$linea['cod_alianza'].">Eliminar</a></td>";
				$tabla .="</tr>";
		}
?>
			<?php echo $tabla; ?>
			</table>
	</body>
</html>
