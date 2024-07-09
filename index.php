<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Sistema de informacion">
  <meta name="keywords" content="HTML,CSS,JavaScript">
  <meta name="author" content="Juan Jose Baez">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OVIAPP</title>
  <link rel="shortcut icon" href="assets/imagenes/logoovi.png">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">

</head>
<body>

<!-- count particles -->
<div class="count-particles">
  <span class="js-count-particles">--</span> particles
</div>

<!-- particles.js container -->
<div id="particles-js"></div>

<!-- scripts -->
<script src="particles.js"></script>
<script src="js/app.js"></script>

<!-- stats.js -->
<script src="js/lib/stats.js"></script>
<script>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>
</body>
  <body class="body_margin" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="margin-top: 0;/*padding-top: -20px*/;">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height: 80px;">
     <div class="container-fluid">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="ion-bar"></span>
                    <span class="ion-bar"></span>
                    <span class="ion-bar"></span>
                </button>
                <!-- <a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a> -->
            </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

          <ul class="nav navbar-nav">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
            <li class="hidden">
              <a class="page-scroll" href="#page-top"></a>
            </li>
              
            <li>
                <a class="page-scroll click-pointer"  onclick="Reseña()" style="margin-left: 20px;" >¿OviApp? <i class="fa fa-eye fa-lg-12"></i></a>
            </li>

            <li>
                <a class="page-scroll click-pointer"  onclick="Aprendices_Desarrolladores()" style="margin-left: 20px;" >Desarrolladores <i class="fa fa-code fa-lg-12"></i></a>
            </li>

           
          

          </ul>
           <ul class="nav navbar-nav navbar-right" style="padding-right: 50px ;">
                 <li  >
                <a class="page-scroll click-pointer nav-item"  onclick="Iniciar_sesion()" > Iniciar sesion <i class="fa fa-sign-in fa-lg-12" ></i> </a>
            </li>
        </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <div class="modal fade" id="Iniciar_sesion" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="caja-inicio-sesion">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="caja-inicio-sesion-titulo">Iniciar Sesión</h3>
          </div>


          <div class="modal-body">
            <form role="form" action="assets/conexion/sesion.php" method="post" id="formulario_login" autocomplete="off">
              <div class="form-group ">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                  <label class="form-control-label" for="usuario"><i class="fa fa-user"></i> Usuario</label>
                  <input class="form-control" type="text" name="usuario" id="usuario">
                </div>
              </div>

              <div class="form-group ">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                  <label class="form-control-label  " for="contrasena"> <i class="fa fa-key"></i> Contraseña</label>
                  <input class="form-control" type="password" name="contrasena" id="contrasena">
                </div>
              </div>

              <div class="modal-footer">
                <div class="col-xs-12" id="contenedor_login" style="text-align: center;"></div>
                <div class="box col-xs-12 ">

                  

                   <div class="modal-footer">
                    <br>   <button class="btn btn-primary icon-btn" style="background-color: #00b2b5" type="button" onclick="acceder()"><i class="icon fa fa-sign-in"></i>Ingresar</button>
                    </div>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="Reseña" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header" style="background-color: #426d6f">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h1 class="modal-title icon  icon-pen"> ¿Que es?</h1>

      </div>
      <div class="modal-body">
        <div class="row">

<div class="col-md-12">
<div style=" overflow-y: auto; ">
  

<!-- <h3 style="text-align: center;">Ingenieros De Sistemas</h3> -->
<table class="table table-bordered">
    <thead>
        <!-- <tr>
            <th></th>
            <th>Titulo</th>
            <th>Universidad</th>
            <th>Especialización/Maestría</th>
            <th>Universidad</th>
        </tr> -->
    </thead>
    <tbody>
        <tr>
            <td>
              <p style="font-size: 16px;">El Proyecto “Desarrollo e implementación de App para el control de reproducción mediante una ruleta en la unidad de ovinos del centro agropecuario la granja Sena- Espinal Regional Tolima”, (para este efecto usaremos OviApp). OviApp tiene como finalidad desarrollar e implementar una app que trabaja bajo un ambiente hibrido que va a permitir a la unidad de ovinos realizar un estricto control y gestión en los procesos de reproducción del rebaño mediante el manejo de una interface gráfica, el cual se representará en una ruleta que permitirá registrar y visualizar el control de reproducción por el instructor técnico de la unidad </p></td>

        </tr>
       


    </tbody>
</table>






</div>
</div>
</div>  

  
      </div>
         
   </div>
</div>

</div>


<div class="modal fade" id="Aprendices_Desarrolladores" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header" style="background-color: #426d6f">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h1 class="modal-title icon  icon-pen">  Aprendices Desarrolladores </h1>

      </div>
      <div class="modal-body">
        <div class="row">

<div class="col-md-12">
<div style=" overflow-y: auto; ">
  

<!-- <h3 style="text-align: center;">Ingenieros De Sistemas</h3> -->



<!-- <h3 style="text-align: center;">Aprendizes Desarrolladores</h3>
<h4 style="text-align: center;">SIE</h4> -->
<table class="table table-bordered" >
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Tecnologo</th>
            <th>Ficha</th>
            <th>Año</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            
            <td>Angie Vanessa Chavez Moreno</td>
            <td>Tecnologo En Análisis y Desarrollo De Sistemas De Información</td>
            <td>1443229</td>
            <td>2017</td>

        </tr>
        <tr>
            <td>Juan Jose Baez Galvez</td>
            <td>Tecnologo En Análisis y Desarrollo De Sistemas De Información</td>
            <td>1443229</td>
            <td>2017</td>
        </tr>
        <tr>
            <td>Luis Felipe Cardozo Garcia</td>
            <td>Tecnologo En Análisis y Desarrollo De Sistemas De Información</td>
            <td>1443229</td>
            <td>2017</td>
        </tr>
        <tr>
            <td>Jhohan Andrey Granada Sabala</td>
            <td>Tecnologo En Análisis y Desarrollo De Sistemas De Información</td>
            <td>1443229</td>
            <td>2017</td>
        </tr>
        <tr>
            <td>Kevin Alexis Villareal Chantre</td>
            <td>Tecnologo En Análisis y Desarrollo De Sistemas De Información</td>
            <td>1443229</td>
            <td>2017</td>
        </tr>
       


    </tbody>
</table>



</div>
</div>
</div>  

  
      </div>
         
   </div>
</div>

</div>

    <!-- particles.js container -->
    <div id="particles-js"></div>

    <div class="center-div">


    <div class="texto_banner">
      <div class="logo">
        <img src="assets/imagenes/logoovi.png" style="width:70%; margin-bottom:center; margin-top:center; ">
      </div>

      <h1></h1>
    </div>


    </div>



  <script src="assets/js/jquery-2.1.4.min.js"></script>
  <script src="assets/js/essential-plugins.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/plugins/pace.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    function Iniciar_sesion() {
    $("#Iniciar_sesion").modal("show");
}


function Reseña() {
    $("#Reseña").modal("show");
}

function Aprendices_Desarrolladores() {
    $("#Aprendices_Desarrolladores").modal("show");
}
//

function acceder() {
  var usuario=document.getElementById("usuario").value;
  var contrasena=document.getElementById("contrasena").value;

  $("#contenedor_login").load("assets/conexion/login.php", {usuario:usuario, contrasena:contrasena})
}







    </script>

    <style>
      body {
    width: 100%;
    height: 100%;
    background-color: #1e505070;
}

html {
    width: 100%;
    height: 100%;
}

@media(min-width:767px) {
    .navbar {
        padding: 20px 0;
        -webkit-transition: background .5s ease-in-out,padding .5s ease-in-out;
        -moz-transition: background .5s ease-in-out,padding .5s ease-in-out;
        transition: background .5s ease-in-out,padding .5s ease-in-out;
    }

    .top-nav-collapse {
        padding: 0;
    }
}




    </style>

    <style>
    .modal-footer{
      padding: 0;
      border-top: 0px solid transparent;
    }

      .intro-section {
    height: 100%;
    padding-top: 15em;
    padding-bottom:  18.4em;
    text-align: center;
    background: url(assets/img/wallhaven-355806.jpg);
    background-repeat: no-repeat;
    background-position: center;
}
.title{
  font-size: 10em;
  color: #fff;
  text-shadow: 0 7px 1px rgba(0, 0, 0, 0.35);
}
.sub_title{
  font-size: 2em;
  color: #fff;
}

.caja-inicio-sesion{
  margin: 1em 1em 0 1em ;
  text-align:center;
}
.logo-inicio-sesion{
  width: 10em;
}

.caja-inicio-sesion-titulo{
  margin: 0;
}


.navbar-default .navbar-nav>li>a {
    color: #fff;
    font-size: 16px;
}

.navbar-default {
    background-color: #426d6f;
    border-color: rgba(231, 231, 231, 0);
}

.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover{
    color: #fff;
    background-color: #00b2b5;
}

.navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
    color: #fff;
    background-color: transparent;
}










/*a {
  display: inline-block;
  margin: 0 5px;
  color: #fff;
}*/

    </style>
  </body>
</html>
