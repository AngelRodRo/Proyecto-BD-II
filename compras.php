<!DOCTYPE html>
<html lang="es">
		<head>
		<title>Compra</title>
		<meta charset="utf-8"> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/starter-template.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/logo.png" width="70" height="30" alt=""></a>
          <a class="navbar-brand" href="#">Agencia de viajes</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index1.php">Inicio</a></li>
 
            <li><a href="ayuda.php">Ayuda</a></li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
              <li><a href="">Iniciar sesion</a></li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"><b class="caret"></b></a>
              <ul class="dropdown-menu">
              </ul>
              </li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<div class="cabecera">
		<img class="logo" src="img/logo.png" width="250" height="130" alt="">
 
  </div>
	<div class="separacion"></div>
	<div class="cuerpo">
		<h1>Nuevas Compras</h1>
			<form action="detalle_compra.php" method="GET">
				<table width=800px>
				<!--	<tr>
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
					</tr>-->
					<tr>
						<td>
							<label for="nro_pasajes">Número de Pasajeros : </label>
						</td>
						<td>
							<script type="text/javascript">
								var x= 0;
								document.write("<select id='nro_pasajes' name='nro_pasajes'>");
								for (var x = 1 ; x <= 20; x++) {
									document.write("<option>"+x+"</option>");
								};
								document.write("</select>");

							</script>
						</td>
					</tr>
					<tr>
						<td>
							<input type="button" value="Regresar">
							<input type="submit" value="Siguiente">
							<input type="reset">
						</td>
					</tr>	
				</table>
			</form>
						</div>
			<footer>Derechos reservados</footer>
	</body>
</html>

