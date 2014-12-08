<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
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
				border-radius: 5px;
				display: inline-block;
				position: relative;
			}

			.resultados{
				display: inline-block;
				position: absolute;
			}
		</style>
	</head>
	<body>
		<div class="search_item">
 			<div class="data">
 				<p><span>Aerolinea : </span><span> LAN </span>
 				<span>Fecha : </span><span>10/09/2014</span></p>
 			</div>
			<div class="data">
			<div><p><span id="cod">Codigo  :</span><span>V0001</span>
			<span>Origen  :</span><span> Arequipa-Peru</span>
			<span>Destino : </span><span> Tacna-Peru</span></p></div>
				
			</div>
			<div>
				<div id="item1">
					<p><span id="cod">Aeropuerto de origen :</span> <span>Rodriguez Bollon</span><span></span></p>
					<p><span id="cod">Aeropuerto de destino:</span> <span>FAP Pedro Canga</span></p>
				</div>
				<div id="item2">
					<p><span><a href="#">Mas detalles</a></span><span class="price">S/.190</span></p>
				</div>
			</div>
			<div></div>
		</div>
	</body>
	</html>	