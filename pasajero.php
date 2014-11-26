<?php 
	include("scripts/conexion.php");
	$codigo = $_REQUEST['codigo'];

	$consulta = "EXEC mostrar_pasajeros_buscar '$codigo'";
	$resultado = sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar pasajero</title>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>Crear un nuevo usuario</title>

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
          <a class="navbar-brand" href="#">Agencia de viajes</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index1.php">Inicio</a></li>
 
            <li><a href="ayuda.php">Ayuda</a></li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
 
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
	<div>

	<?php 
			while($linea=sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)){
				$codigo = $linea['Codigo'];
				$nombre =  $linea['Nombre'];
				$apellido_p = $linea['Apellido Paterno'];
				$apellido_m = $linea['Apellido Materno'];
				$email = $linea['Email'];
				$edad = $linea['Edad'];	
				$sexo = $linea['Sexo'];
				$nro_telefono = $linea['Nro de telefono'];
			}

	 ?>
	 <div class="foto">
	 	<img src="img/usuario.jpg" alt="">
	 </div>
	<div class="dat_pers">
		<div class="label_pas">
			<label for="codigo">Codigo :</label><br>
			<label for="nombre">Nombre : </label><br>
			<label for="apellido_p">Apellido Paterno :</label><br>
			<label for="apellido_m">Apellido Materno :</label><br>
			<label for="email">Email :</label><br>
			<label for="email">Edad :</label><br>
			<label for="sexo">Sexo :</label><br>
			<label for="nro_telefono">Nro de telefono :</label>
		</div>
		<div class="dato_pas">
			<span><?php echo $codigo; ?></span><br>
			<span><?php echo $nombre; ?></span><br>
			<span><?php echo $apellido_p; ?></span><br>
			<span><?php echo $apellido_m; ?></span><br>
			<span><?php echo $email; ?></span><br>
			<span><?php echo $edad ?></span><br>
			<span><?php echo $sexo; ?></span><br>
			<span><?php echo $nro_telefono; ?></span>
		</div>

	</div>
		<div></div>
	</div>
</body>
<footer>
	<span>Derechos reservados - 2014</span>
</footer>
</html>