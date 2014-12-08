<?php 

	include("scripts/conexion.php");
	$ciudado = $_POST['ciudado'];
	$ciudadd = $_POST['ciudadd'];
	$fecha = $_POST['fecha'];

	$datos=date_parse($fecha);
 
	$date = $datos['day']."-".$datos['month']."-".$datos['year'];


	$consulta = "EXEC buscar_vuelos '$ciudado','$ciudadd','$date'";

	$resultado = sqlsrv_query($conexion,$consulta) or 
	die("No se puede ejecutar");

	$items="";

 

	while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
		$items.="<div class='search_item'>";
		$items.="<div class='data'>";
		$items.="<div><p><span id='cod'><strong>Codigo  :</strong></span><span>".$linea['Codigo de vuelo']."</span>";
		$items.="<span><strong>Origen  :</strong></span><span>".$linea['Ciudad de origen']."-".$linea['Pais origen']."</span>";
		$items.="<span><strong>Destino : </strong></span><span>".$linea['Ciudad de destino']."-".$linea['Pais de Destino']."</span></p></div>";
		$items.="</div>";
		$items.="<div>";
		$items.="<div id='item1'>";
		$items.=" <p><span id='cod'><strong>Aeropuerto de origen &nbsp;:</strong></span> <span>".$linea['Aeropuerto de origen']."</span></p>";
		$items.="<p><span id='cod'><strong>Aeropuerto de destino:</strong></span> <span>".$linea['Aeropuerto de destino']."</span></p>";
		$items.="</div>";
		$items.="<div id='item2'>";
		$items.="<p><span><a href='#''>Mas detalles</a></span><span class='price'>S/.".$linea['Monto']."</span></p>";
		$items.="				</div>
			</div>
		</div>";
 
	}
?>
<!DOCTYPE html>
<html lang="en">
<head></strong>
	<meta charset="UTF-8">
	<title>Reservas disponibles</title>
 
	   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <style>
	 
					.search_item{
				border:1px solid black;
				border-radius: 10px;
				padding: 10px;
				font-family: arial;
				margin:  5px 20px;
			}

			.data{
				margin: 0 15px;
			}

			.data>span{
				 
			}


			p{
				margin: 10px 5px;
			}

			#item1,#item2{
				display: inline-block;
				margin: 0px 15px;
			}
 

			.price{
				font-size: 45px;
				margin: 0 5px;
			}

			span{
				margin: 0 25px;
			}

			.buscador{
				display: inline-block;
			}

			.resultados{
				display: inline-block;
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
			<a class="navbar-brand" href="#"><img src="img/logo.png" width="50" height="30" alt=""></a>
          	<a class="navbar-brand" href="#">Agencia de viajes</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Inicio</a></li>
 
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
	<div class="buscador">
		
	</div>
	<div class="resultados">
		<?php echo $items; ?>
	</div>
		
</body>
</html>