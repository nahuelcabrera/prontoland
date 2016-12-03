<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prontoland - HOME - MAKE UR LIFE </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/master.css" rel="stylesheet">

  </head>
  <body>
  <!--Barra de navegacion-->
   <div class="nav-bar">

    <div class="logo">
  <!--LOGO SVG-->
    <a href="http://localhost:8000/"><img class="logosvg" src="img/logopl.svg" alt="img"></a>
    </div>

 <!--USUARIO-->
   <div class="userlog">
     <p class="navbar-text navbar-right">Hola <a href="jo" target="blank" class="navbar-link">ProntolandUser</a></p>
   </div>

<!--LANDI-->
   <div class="landi">
    <img class="landi" src="img/landi.gif" alt="landi">
   </div>




  </div>

    @yield('content')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <br><br><br>
    <footer class="pie"><small>2016 | Nahuel Cabrera | Prontoland.com project - Derechos reservados </small></footer>
  </body>
</html>
