<?php 
    include('scripts/verificar.php');
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

    <title>Inicio de sesión</title>

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
    <style>
       input{
        color:black;
        border-radius:   5px;
       }

       span{
        margin: 5px;

       }

       .login
       {    
            margin:10px;
            color:  white;
            display: inline-block;
       }

        body
        {
          background-image:   url('img/fondo.jpg');
          background-repeat:  no-repeat;  
          background-position:  20% 30%;
        }
    </style>
    <script type="text/javascript">
      window.onload = function () {
        document.formularioContacto.nombre.focus();
        document.formularioContacto.addEventListener('submit', validarFormulario);
      }

      function validarFormulario(evObject) {

        evObject.preventDefault();
        var todoCorrecto = true;
        var formulario = document.formularioUsuario;
        for (var i=0; i<formulario.length; i++) 
        {
          if(formulario[i].type =='text') {
            if (formulario[i].value == null || formulario[i].value.length == 0 || /^\s*$/.test(formulario[i].value))
            {
                alert (formulario[i].name+ ' no puede estar vacío o contener sólo espacios en blanco');
                todoCorrecto=false;
            }
          }
        }
        if (todoCorrecto ==true) {formulario.submit();}
        }

    </script>
 
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
            <li><a href="registro.php">Nuevo usuario</a></li>
 
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <form name="formularioUsuario" action="scripts/login.php" method="POST" >
              <li class="login"> <span>Usuario : </span><input  name="usuario" required type="text"> </li>
              <li class="login"> <span>Contraseña : </span><input name="password" required type="password"> </li>
              <li class="login"><input class="btn btn-primary " type="submit" required value="Iniciar sesion"></li>
          </form>
               
            </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>

    

    <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

      </body>
</html>

