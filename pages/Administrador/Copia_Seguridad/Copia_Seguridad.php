<?php
session_start();
if (isset($_SESSION['ADMINISTRADOR']))
{ 
  include '../../../assets/conexion/conexion.php';
  $usuario=($_SESSION['ADMINISTRADOR']);
  $res=mysqli_query($conexion,"SELECT * FROM usuarios WHERE id_Usuario=$usuario");
        while ($reg=mysqli_fetch_array($res)) 
        {
          $nomusua_usua=utf8_decode($reg[2]);
          $rolusua=utf8_decode($reg[1]);
         }
         $saludo="Bienvenido $nomusua_usua, a el Rol del $rolusua";
         $usu="<p>$nomusua_usua</p> <p class='designation'>$rolusua</p>"; 

         include 'Connet.php';
         
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
    <link rel="stylesheet" type="text/css" href="../../../assets/css/main.css">
    <link rel="shortcut icon" href="../../../assets/imagenes/Sindalab.png">
    <script src="../../../assets/js/jquery-2.1.4.min.js"></script>
    <title>Copias de seguridad</title>

  </head>
  <body class="sidebar-mini fixed sidebar-collapse">
    <div class="wrapper">
      <header class="main-header hidden-print"><a class="logo" style="background-color: #426d6f;" href="../index.php">OviApp</a>
        <nav class="navbar navbar-static-top" style="background-color: #426d6f;">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">   
              <li><a href="../../../assets/conexion/cerrar.php"><i class="fa fa-sign-out fa-lg"></i> Salir</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Menu de navegacion  -->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="../../../assets/imagenes/user.png" alt="User Image"></div>
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
                <li><a href="../Registrar/Reg-Animal/Reg-Animal.php"><i class="fa fa-circle-o"></i>Animal</a></li>
                <li><a href="../Registrar/Reg-persona/Reg-persona.php"><i class="fa fa-circle-o"></i>Persona</a></li>
              </ul>
              
              <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Ingresar</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                 <li><a href="../Registrar/Reg-celo/Reg-celo.php"><i class="fa fa-circle-o"></i>Celo</a></li>
                 <li><a href="../Registrar/Reg-pesaje/Reg-pesaje.php"><i class="fa fa-circle-o"></i>Pesaje</a></li>
                 <li><a href="../Registrar/Reg-pesaje/Reg-pesaje.php"><i class="fa fa-circle-o"></i>Pesaje</a></li>
                 <li><a href="../Registrar/Reg-ecografia/Reg-ecografia.php"><i class="fa fa-circle-o"></i>Ecografia</a></li>
                 <li><a href="../Registrar/Reg-parto/Reg-parto.php"><i class="fa fa-circle-o"></i>Parto</a></li>
              </ul>
              
              <li class="treeview"><a href="#"><i class="fa fa-calendar"></i><span>Calendario</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                 <li><a href="../agenda/indexC.php"><i class="fa fa-circle-o"></i>Calendario Ovino</a></li>
              </ul>

            <li class="treeview"><a href="#"><i class="fa fa-gears"></i><span>Configuracion</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../registrar/Reg-Usuarios/Reg-usuarios.php"><i class="fa fa-circle-o"></i>Usuarios</a></li>
                <li><a href="../Copia_Seguridad/Copia_Seguridad.php"><i class="fa fa-circle-o"></i>Copias de seguridad</a></li>
              </ul>
            </li>
            <li class=""><a href="../manual_usuario/manual_usuario_oviapp.pdf"><i class="fa fa-book"></i><span>Manual De Usuario</span></a></li>
          </ul>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th"></i> Copias de seguridad</h1>
            <p>Desarrollo e implementación de App para el control de reproducción mediante una ruleta en la unidad de ovinos del centro agropecuario la granja Sena- Espinal Regional Tolima (OviApp)</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">

              <div class="row">

       <div class="col-xs-12  col-md-6 col-lg-offset-3 formulario_pequeño" data-form-type="formoid">  
                <div class="col-xs-12  col-md-8 col-lg-offset-2"> 
          <h3 class="text-center titulo_section">Crear Copia de Seguridad</h3>
        </div>

        <div class="col-xs-12">
          <div class="box">
            <button class="btn btn-primary icon-btn" type="button"  onclick="backup()" ><i class="fa fa-fw fa-lg fa-database"></i><span>Guardar</span></button>
          </div>
        </div>

            <div id="contenedor"></div>

        <div class="col-xs-12  col-md-8 col-lg-offset-2">
          <h3 class=" text-center titulo_section">Restaurar Copia de seguridad </h3>
        </div>


<div  id="contenedor_select">
        <div class="col-xs-12  col-md-8 col-lg-offset-2" >
          <div class="form-group">
          <label class="form-control-label" for="">Seleciona un punto de restauracion</label>

          <select name="restaurar" id="restaurar" class="form-control">
            <option value="Selecciona" >Selecciona</option>
            <?php
              $ruta=BACKUP_PATH;
              if(is_dir($ruta)){
                  if($aux=opendir($ruta)){
                      while(($archivo = readdir($aux)) !== false){
                          if($archivo!="."&&$archivo!=".."){
                              $nombrearchivo=str_replace(".sql", "", $archivo);
                              $nombrearchivo=str_replace("-", ":", $nombrearchivo);
                              $ruta_completa=$ruta.$archivo;
                              if(is_dir($ruta_completa)){
                              }else{
                            echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
                              }
                          }
                      }
                      closedir($aux);
                  }
              }else{
                  echo $ruta." No es ruta válida";
              }
            ?>
          </select>
          </div>  
          </div>
    </div>

          <div class="col-xs-12 text-center" id="contenedor2">
              <h3  id="espere" style="font-weight: bold; font-size: 20px">  <i class="fa fa-spinner fa-pulse fa-fw"></i> Por favor Espere Restaurando Copia De Seguridad</h3>
        </div>

        <div class="col-xs-12">
          <div class="box">
          <button class="btn btn-primary icon-btn" type="button"  onclick="restaurar()" ><i class="fa fa-fw fa-lg fa-database"></i><span>Guardar</span></button>
          </div>    
        </div>

        </div>

      </div>

            </div>
          </div>
        </div>

        
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        
      </div>
    <!-- Javascripts-->
    <div id="resultado"></div>
    <script src="../../../assets/js/jquery-2.1.4.min.js"></script>
    <script src="../../../assets/js/essential-plugins.js"></script>
    <script src="../../../assets/js/bootstrap.min.js"></script>
    <script src="../../../assets/js/plugins/pace.min.js"></script>
    <script src="../../../assets/js/main.js"></script>
    <script type="text/javascript" src="../../../assets/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript" src="../../../assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../../assets/js/plugins/dataTables.bootstrap.min.js"></script>


 

 


  <script>






var espere=document.getElementById('espere').style.display='none';
  
function restaurar() {

    var restaurar=document.getElementById('restaurar').value;
  if (restaurar=="Selecciona") {
swal({
    title: 'Error!',
    text: "Selecciona Un Punto de Restauracion",
    type: 'error',
    background: '#fff url(../../../../assets/img/Huevo3.png)',
    confirmButtonColor: '#ff9800'


  })


  }else{
var restaurar=document.getElementById('restaurar').value;
var espere=document.getElementById('espere').style.display='block';
$("#contenedor2").load("Restore.php",{restaurar:restaurar});
    
  }




}

function backup(){


$("#contenedor").load('Backup.php');

$("#contenedor_select").load('select.php');
}

</script>

    

  </body>
</html>
<?php

}
else
{
  echo "<script type='text/javascript'>alert('Acceso Denegado');location='../../../index.php?Acceso Denegado'</script>";
}  
?>