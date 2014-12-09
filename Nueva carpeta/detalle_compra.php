<?php
	
	include('scripts/conexion.php');
	session_start();
	$_SESSION['nro_pasajes'] = $_REQUEST['nro_pasajes'];
	$consulta="select * from pais";
	$resultado = sqlsrv_query($conexion,$consulta);
	$opciones = "";
	while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
		$opciones .= "<option value='{$linea['cod_pais']}'>{$linea['nombre_pais']}</option> ";
	}
	$consulta = "select * from detalle_compra dc right join pasaje p on p.cod_pasaje = dc.cod_pasaje 
where nro_vuelo = '{$_SESSION['nro_vuelo']}' and dc.cod_compra is  NULL";
	$resultado = sqlsrv_query($conexion,$consulta);
	$pasajes ="";
	while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
		$pasajes .= "<option value='{$linea['cod_pasaje']}'>{$linea['nro_asiento']}</option> ";
	}
	
	echo "<script type='text/javascript'> var nro_pasajes = {$_SESSION['nro_pasajes']} </script>";
?>
<!DOCTYPE html>
<html lang="es">
		<head>
		<title>Compra</title>
		<meta charset="utf-8"> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/starter-template.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<style type="text/css">
	td,th,tr,table{
		text-align: left;
		border: none;
	}

	table{
		margin: 10px;
	}

	.botones{
		padding: 10px;
		margin: 10px;
	}

	td{
		padding: 5px;
	}
</style>
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
		<h1><b>Nuevas Compras</b></h1>
				<form action='scripts/registrar_pasajero.php' method='GET' >
					<table >
					<script type="text/javascript">
					for (var i = 1 ; i <= nro_pasajes; i++) {
							document.write('<tr><td>');
							document.write('<br><strong>Datos del Pasajero '+i+'</strong></br>');
							document.write('</tr>');
							var query ="<tr><td><label for='identificacion'>Nro. de Identificación:</label></td><td><input type='text' name='identificacion"+i+"' id='identificacion'></td></tr><tr><td><label for='tipo_identificacion'>Tipo de Identificación:</label></td><td><select id='tipo_identificacion' name='tipo_identificacion"+i+"'> <option value='D.N.I'>Documento Nacional de Identidad</option> <option value='Carnet Estrangeria'>Carnet de Estrangeria</option> <option value='Cédula de Extrangeria'>Cédula de Extrangeria</option></select></td></tr><tr><td><label for='nombre'>Nombres: </label></td><td><input type='text' name='nombre"+i+"' id='nombre'></td></tr><tr><td><label for='apellido_paterno'>Apellido Paterno: </label></td><td><input type='text' name='apellido_paterno"+i+"' id='apellido_paterno'></td></tr><tr><td><label for='apellido_materno'>Apellido Materno: </label></td><td><input type='text' name='apellido_materno"+i+"' id='apellido_materno'></td></tr><tr><td><label for='fecha_nacimiento'>Fecha de Nacimiento: </label></td><td><input type='date' name='fecha_nacimiento"+i+"' id='fecha_nacimiento'></td></tr><tr><td><label for='email'>Email: </label></td><td><input type='text' name='email"+i+"' id='email'></td></tr><tr><td><label>Seleccione el sexo:</label></td><td><input type='radio' name='sexo"+i+"' id='varon' value='M'><label for='varon'>Varón</label><br/> <input type='radio' name='sexo"+i+"' id='mujer' value='F'><label for='mujer'>Mujer</label></td></tr><tr><td><label for='pais'>Pais: </label></td><td><select id='pais' name='pais"+i+"'><?php echo $opciones ?></select></td></tr><tr><td><label for='pasajes'>Nro de asiento: </label></td><td><select id='pasajes' name='pasajes"+i+"'><?php echo $pasajes ?></select></td></tr>";
							document.write(query);
						};
					</script>
					<tr >
						<td class="botones">
							<a href=javascript:history.back(1)><button class="btn btn-primary">Regresar</button></a>
							<input class="btn btn-primary" type="submit" value="Finalizar">
							<input class="btn btn-primary" type="reset">
						</td>
					</tr>	
				</table>
			</form>
				</div>
			<footer>Derechos reservados</footer>
	</body>
</html>
