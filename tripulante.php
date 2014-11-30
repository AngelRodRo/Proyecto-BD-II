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
		<title>Registro de Tripulación</title>
		<meta charset="utf-8">
		<link rel="stulesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/estilos_pasajero.css">
	</head>
	<body>
		<h1>REGISTRO DE LA TRIPULACIÓN</h1>
			<form action="scripts/registrar_tripulante.php" method="POST" >
				<table>
					<tr>
						<td>
							<label for="cod_tripulante">Código de tripulante:</label>
						</td>
						<td>
							<input type="text" name="cod_tripulante" id="cod_tripulante">
						</td>
					</tr>
					<tr>
						<td>
							<label for="dni_tripulante">DNI :</label>
						</td>
						<td>
							<input type="text" name="dni_tripulante" id="dni_tripulante">
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
							<label for="apellidos">Apellidos : </label>
						</td>
						<td>
							<input type="text" name="apellidos" id="apellidos">
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
							<label for="fecha_nacimiento">Fecha de Nacimiento: </label>
						</td>
						<td>
							<input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
						</td>
					</tr>					
					<tr>
						<td>
							<label for="fecha_inicio">Fecha de Inicio: </label>
						</td>
						<td>
							<input type="date" name="fecha_inicio" id="fecha_inicio">
						</td>
					</tr>
					<tr>
						<td>
							<label for="rol">Tipo de Identificación:</label>
						</td>
						<td>
							<select id="rol" name="rol">
							  <option value="Piloto">Piloto</option>
							  <option value="Aeromoso">Aeromoso</option>
							  <option value="Cocinero">Cocinero</option>
							  <option value="Limpieza">Limpieza</option>
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
