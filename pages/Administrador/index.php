<?php
session_start();
if (isset($_SESSION['ADMINISTRADOR']))
{ 
  include '../../assets/conexion/conexion.php';
  $usuario=($_SESSION['ADMINISTRADOR']);
  $res=mysqli_query($conexion,"SELECT * FROM usuarios WHERE id_Usuario=$usuario");
        while ($reg=mysqli_fetch_array($res)) 
        {
          $nomusua_usua=utf8_decode($reg[2]);
          $rolusua=utf8_decode($reg[1]);
         }
         $saludo="Bienvenido $nomusua_usua, a el Rol del $rolusua";
         $usu="<p>$nomusua_usua</p> <p class='designation'>$rolusua</p>"; 
         
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="keywords" content="HTML,CSS,JavaScript"/>
    <meta name="author" content="instructor"/>
    <link rel="stylesheet" type="text/css" href="../../assets/css/main.css">
    <title>Inicio</title>

  </head>
  <body class="sidebar-mini fixed sidebar-collapse">
    <div class="wrapper">
      <header class="main-header hidden-print"><a class="logo" style="background-color:#426d6f;" href="index.php">Menu Principal</a>
        <nav class="navbar navbar-static-top" style="background-color:#426d6f;">
          <a class="sidebar-toggle " href="#" data-toggle="offcanvas"></a>
          
          <div class="navbar-custom-menu" >
            <ul class="top-nav">   
              <li><a href="../../assets/conexion/cerrar.php"><i class="fa fa-sign-out fa-lg"></i> Salir</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Menu de navegacion  -->

      <aside class="main-sidebar hidden-print" style="background-color: #000;">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="../../assets/imagenes/user.png" alt="User Image"></div>
            <div class="pull-left info">
              <?php 
              echo "$usu";
              ?>
            </div>
          </div>
          <!-- opciones del menu de navegacion-->
          <ul class="sidebar-menu">
            <li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Inicio</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-folder"></i><span>Registrar</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="Registrar/Reg-Animal/Reg-Animal.php"><i class="fa fa-circle-o"></i>Animal</a></li>
                <li><a href="Registrar/Reg-persona/Reg-persona.php"><i class="fa fa-circle-o"></i>Persona</a></li>
              </ul>
              
              <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Ingresar</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                 <li><a href="Registrar/Reg-celo/Reg-celo.php"><i class="fa fa-circle-o"></i>Celo</a></li>
                 <li><a href="Registrar/Reg-pesaje/Reg-pesaje.php"><i class="fa fa-circle-o"></i>Pesaje</a></li>
                  <li><a href="Registrar/Reg-ecografia/Reg-ecografia.php"><i class="fa fa-circle-o"></i>Ecografia</a></li>
                   <li><a href="Registrar/Reg-parto/Reg-parto.php"><i class="fa fa-circle-o"></i>Parto</a></li>
              </ul>
               <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Consultar</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="Consultar/Cons-animal/Cons-animal.php"><i class="fa fa-circle-o"></i>Ovinos</a></li>
              
              </ul>
            </li>
              
              <li class="treeview"><a href="#"><i class="fa fa-calendar"></i><span>Calendario</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                 <li><a href="agenda/indexC.php"><i class="fa fa-circle-o"></i>Calendario Ovino</a></li>
              </ul>

            <li class="treeview"><a href="#"><i class="fa fa-gears"></i><span>Configuracion</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="registrar/Reg-Usuarios/Reg-usuarios.php"><i class="fa fa-circle-o"></i>Usuarios</a></li>
                <li><a href="Copia_Seguridad/Copia_Seguridad.php"><i class="fa fa-circle-o"></i>Copias de seguridad</a></li>
              </ul>
            </li>
            <li class=""><a href="manual_usuario/manual_usuario_oviapp.pdf"><i class="fa fa-book"></i><span>Manual De Usuario</span></a></li>
          </ul>
          </ul>
        </section>
      </aside>

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-home"></i> Inicio</h1>
            <p> </p>
          </div>
        </div>
            <div class="card">
              <h3 class="card-title"> <center><strong>Bienvenido Instructor</strong></center>  </h3>
              <h4 class="card-title">Desarrollo e implementación de App para el control de reproducción mediante una ruleta en la unidad de ovinos del centro agropecuario la granja Sena- Espinal Regional Tolima (OviApp)</h4>
              




              
            </div>
          </div>
        </div>
          </div>
        </div>
       
      </div>
    </div>
    <!-- Javascripts-->
    <script src="../../assets/js/jquery-2.1.4.min.js"></script>
    <script src="../../assets/js/essential-plugins.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/pace.min.js"></script>
    <script src="../../assets/js/main.js"></script>

    

  </body>
</html>
<?php

}
else
{
  echo "<script type='text/javascript'>alert('Acceso Denegado');location='../../index.php?Acceso Denegado'</script>";
}  
?>