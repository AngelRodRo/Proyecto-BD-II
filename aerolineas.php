<?php
	include('scripts/conexion.php');
	$consulta="select * from alianza_aerea";
	$resultado = sqlsrv_query($conexion,$consulta);
	$opciones = "";
	while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
		$opciones .= "<option value='{$linea['cod_alianza']}'>{$linea['nombre_alianza']}</option> ";
	}
?>		
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Registro de Aerolineas</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>REGISTRO DE AEROLINEAS</h1>
			<form action="scripts/registrar_aerolinea.php" method="POST">
				<table width=400px>
					<tr>
						<td>
							<label for="ruc">RUC :</label>
						</td>
						<td>
							<input type="text" name="ruc" id="ruc">
						</td>
					</tr>
					<tr>
						<td>
							<label for="nombre">Nombre de la aerolinea :</label>
						</td>
						<td>
							<input type="text" name="nombre" id="nombre">
						</td>
					</tr>
					<tr>
						<td>
							<label for="cod_alianza">Alianza Aerea : </label>
						</td>
						<td>
							<select id="cod_alianza" name="cod_alianza">
								<?php echo $opciones ?>
							</select>
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
				<caption>Lista de Aerolineas</caption>
				<tr>
					<th>Ruc</th>
					<th>Nombre</th>
					<th>Eliminar</th>
				</tr>
<?php 
	include("scripts/conexion.php");
	$consulta = "select * from aerolinea";
	$resultado = sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');
	$tabla = "";
	while($linea=sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)){
				$tabla .="<tr>";
				$tabla .="<td>".$linea['RUC']."</td>";
				$tabla .="<td>".$linea['nombre']."</td>";
				$tabla .="<td><a href='scripts/eliminar_aerolinea.php?RUC={$linea['RUC']}'>Eliminar</a></td>";
				$tabla .="</tr>";
		}
?>
			<?php echo $tabla; ?>
			</table>
	</body>
</html>
