<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Realizar Compra</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Nuevas Compras</h1>
			<form action="" method="get">
				<table width=800px>
					<tr>
						<td>
							<label for="pais_origen">Seleccione su Pais de origen :</label>
						</td>
						<td>
							<select name="pais_origen" >
							  <option value="tacna">Documento Nacional de Identidad</option>
							  <option value="arica">Carnet de Estrangeria</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="ciudad_origen">Seleccione su Ciudad de origen :</label>
						</td>
						<td>
							<select name="ciudad_origen" >
							  <option value="tacna">Documento Nacional de Identidad</option>
							  <option value="arica">Carnet de Estrangeria</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="pais_destino">Seleccione el Pais de destino :</label>
						</td>
						<td>
							<select name="pais_destino" >
							  <option value="Documento Nacional de Identidad">Documento Nacional de Identidad</option>
							  <option value="Carnet de Estrangeria">Carnet de Estrangeria</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="ciudad_destino">Seleccione la Ciudad de destino :</label>
						</td>
						<td>
							<select name="ciudad_destino" >
							  <option value="Documento Nacional de Identidad">Documento Nacional de Identidad</option>
							  <option value="Carnet de Estrangeria">Carnet de Estrangeria</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="nro_boletos">Número de Pasajeros : </label>
						</td>
						<td>
							<script type="text/javascript">
								var x= 0;
								document.write("<select name='nro_pasajes'>");
								for (var x = 0 ; x <= 20; x++) {
									document.write("<option>"+x+"</option>");
								};
								document.write("</select>");

							</script>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="Siguiente">
							<input type="reset">
						</td>
					</tr>	
				</table>
			</form>
	</body>

</html>
