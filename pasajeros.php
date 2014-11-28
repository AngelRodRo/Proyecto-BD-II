<?php
	include('scripts/conexion.php');
	$consulta="select * from pais";
	$resultado = sqlsrv_query($conexion,$consulta);
	$opciones = "";
	while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
		$opciones .= "<option value='{$linea['cod_pais']}'>{$linea['nombre_pais']}</option> ";
	}
?>		
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Registro de Pasajeros</title>
		<meta charset="utf-8">
		<link rel="stulesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/estilos.css">
	</head>
	<body>
		<h1>REGISTRO DE NUEVOS PASAJEROS</h1>
			<form action="scripts/registrar_pasajero.php" method="POST" >
				<table>
					<tr>
						<td>
							<label for="identificacion">Nro. de Identificación:</label>
						</td>
						<td>
							<input type="text" name="identificacion" id="identificacion">
						</td>
					</tr>
					<tr>
						<td>
							<label for="tipo_identificacion">Tipo de Identificación:</label>
						</td>
						<td>
							<select id="tipo_identificacion" name="tipo_identificacion">
							  <option value="D.N.I">Documento Nacional de Identidad</option>
							  <option value="Carnet Estrangeria">Carnet de Estrangeria</option>
							  <option value="Cédula de Extrangeria">Cédula de Extrangeria</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="nombre">Nombres: </label>
						</td>
						<td>
							<input type="text" name="nombre" id="nombre">
						</td>
					</tr>
					<tr>
						<td>
							<label for="apellido_paterno">Apellido Paterno: </label>
						</td>
						<td>
							<input type="text" name="apellido_paterno" id="apellido_paterno">
						</td>
					</tr>
					<tr>
						<td>
							<label for="apellido_materno">Apellido Materno: </label>
						</td>
						<td>
							<input type="text" name="apellido_materno" id="apellido_materno">
						</td>
					</tr>					
					<tr>
						<td>
							<label for="fecha_nacimiento">Fecha de Nacimiento: </label>
						</td>
						<td>
							<input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
						</td>
					</tr>					
					<tr>
						<td>
							<label for="email">Email: </label>
						</td>
						<td>
							<input type="text" name="email" id="email">
						</td>
					</tr>					
					<tr>
						<td>
							<label>Seleccione el sexo:</label>
						</td>
						<td>
							<input type="radio" name="sexo" id="varon" value="M">
								<label for="varon">Varón</label>
							<br/> 
							<input type="radio" name="sexo" id="mujer" value="F">
								<label for="mujer">Mujer</label>
						</td>
					</tr>
					<tr>
						<td>
							<label for="pais">Pais: </label>
						</td>
						<td>
							<select id="pais" name="pais">
								<?php echo $opciones ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<input class="btn"type="submit" value="Registrar">
							<input class="btn" type="reset">
						</td>
					</tr>	
				</table>
				<div id="imagen_form">
					<!--<img src="img/avion.png">-->
				</div>
			</form>
	</body>
</html>
