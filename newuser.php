<?php 
    include('validar.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Crear un nuevo usuario</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <a class="navbar-brand" href="#">Sistema de kardex</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index1.php">Inicio</a></li>
            <li><a href="mostrar.php">Mostrar kardex</a></li>
            <li><a href="ayuda.php">Ayuda</a></li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
              <li  ><a href="#"> <img src="img/user.png" width="25" height="25">  <?php echo "USUARIO : ".$_SESSION['usuario']; ?></a></li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li  ><a href="newuser.php">Crear nuevo usuario</a></li>
                <li class="active" ><a href="salir.php">Cerrar sesión</a></li>
    
              </ul>
              </li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="jumbotron">    
			<form class="form-signin" role="form" action="usuario.php" method="POST" >
        <h2 class="form-signin-heading">Por favor ingrese los datos</h2>
        <input type="text" class="form-control" placeholder="Nombres" name="nombres" required autofocus>
        <input type="text" class="form-control" placeholder="Apellido paterno" name="app" required autofocus>
        <input type="text" class="form-control" placeholder="Apellido materno" name="apm" required autofocus>
        <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
        <input type="password" class="form-control" placeholder="Password" name="clave" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Crear nuevo usuario</button>
      </form>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>



