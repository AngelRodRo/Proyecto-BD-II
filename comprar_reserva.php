<!DOCTYPE html>
<html lang="es">
		<head>
		<title>Compra</title>
		<meta charset="utf-8"> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/starter-template.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/sticky-footer-navbar.css">
<style>
	td,th,tr,table{
		border: none;
	}

	.footer{
		background: #000000;
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
            <li><a href="index.php">Inicio</a></li>
 
            <li><a href="ayuda.php">Ayuda</a></li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
              <li class="active" ><a href="scripts/salir.php">Cerrar sesión</a></li>
           
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
			<form action="scripts/registrar_compra_reserva.php" method="GET">
				<table width=800px>
					<tr>
						<td>
							<label for="cod_reserva">Ingrese el codigo de Reserva</label>
						</td>
						<td>
							<input name="cod_reserva"></input>
						</td>
					</tr>
					<tr>
						<td>
							<input class="btn btn-primary" type="button" value="Regresar">
							<input class="btn btn-primary" type="submit" value="Comprar">
							<input class="btn btn-primary" type="reset">
						</td>
					</tr>	
				</table>
			</form>
						</div>
			<footer class="footer"><div class="container"><p class=" ">Derechos reservados</p></div></footer>
	</body>
</html>

