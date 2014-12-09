 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reservas disponibles</title>
 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/starter-template.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<link rel="stylesheet" type="text/css" href="css/sticky-footer-navbar.css">
   <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.ketchup.all.min.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery-validate.js"></script>
  <style type="text/css">
      form{
        margin: 0 400px auto;
      }
          .footer{
    background: #000000;
  }
  .separacion{
    margin:   0px;
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
             
              
           
            </ul>
            
        </div><!--/.nav-collapse -->
      </div>
    </div>
  <div class="cabecera">
    <img class="logo" src="img/logo.png" width="250" height="130" alt="">
 
  </div>
  <div class="separacion"></div>
  <div class="jumbotron"> 
  <div class="container"> 
 
      <form class="form-signin" role="form" action="scripts/usuario.php" method="POST" >
        <h2 class="form-signin-heading">Por favor ingrese los datos</h2><br>
        <input type="text" class="form-control" placeholder="Nombres" name="nombres" required autofocus><br>
        <input type="text" class="form-control" placeholder="Apellido paterno" name="app" required autofocus><br>
        <input type="text" class="form-control" placeholder="Apellido materno" name="apm" required autofocus><br>
        <input type="text" class="form-control" placeholder="Username" name="username" required autofocus><br>
        <input type="password" class="form-control" placeholder="Password" name="clave" required><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Crear nuevo usuario</button>
      </form>
   </div>
    </div>
        <footer class="footer"><div class="container"><p class=" ">Derechos reservados - 2014</p></div></footer>

</body>
</html>