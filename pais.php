<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Paises</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Registros de Paises</h1>
			<form action="scripts/registrar_pais.php" method="POST">
				<table >
					<tr>
						<td>
							<label for="cod_pais">Código de Pais:</label>
						</td>
						<td>
							<input type="text" id="cod_pais" name="cod_pais">
						</td>
					</tr>
					<tr>
						<td>
							<label for="nombre_pais">Nombre :</label>
						</td>
						<td>
							<input type="text" name="nombre_pais" id="nombre_pais">
						</td>
					</tr>	
					<tr>
						<td>
							<label for="descripcion_pais">Descripcion :</label>
						</td>
						<td>
							<input type="text" name="descripcion_pais" id="descripcion_pais">
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
			<table style="color:blue">
				<caption>Lista de Alianzas Aereas</caption>
				<tr>
					<th>Código</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Eliminar</th>
				</tr>
<?php 
	include("scripts/conexion.php");
	$consulta = "select * from pais";
	//Ejecutando consultas
	$resultado = sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');
	$tabla = "";
	while($linea=sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)){
				$tabla .="<tr>";
				$tabla .="<td>".$linea['cod_pais']."</td>";
				$tabla .="<td>".$linea['nombre_pais']."</td>";
				$tabla .="<td>".$linea['descripcion_pais']."</td>";
				$tabla .="<td><a href='scripts/eliminar_pais.php?cod_pais={$linea['cod_pais']}'>Eliminar</a></td>";
				$tabla .="</tr>";
		}
?>
			<?php echo $tabla; ?>
			</table>
	</body>
</html>
