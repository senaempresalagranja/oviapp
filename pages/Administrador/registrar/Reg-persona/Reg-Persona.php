<?php
session_start();
if (isset($_SESSION['ADMINISTRADOR']))
{ 
  include '../../../../assets/conexion/conexion.php';
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
    <link rel="stylesheet" type="text/css" href="../../../../assets/css/main.css">
    <title> Registrar Persona</title>

  </head>
  <body class="sidebar-mini fixed sidebar-collapse">
    <div class="wrapper">
      <header class="main-header hidden-print"><a class="logo" style="background-color:#426d6f;" href="../../index.php">Menu Principal</a>
        <nav class="navbar navbar-static-top"  style="background-color:#426d6f;">
          <!-- Sidebar toggle button--><a class="sidebar-toggle " href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">   
              <li><a href="../../../../assets/conexion/cerrar.php"><i class="fa fa-sign-out fa-lg"></i> Salir</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Menu de navegacion  -->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="../../../../assets/imagenes/user.png" alt="User Image"></div>
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
                <li><a href="../../Registrar/Reg-Animal/Reg-Animal.php"><i class="fa fa-circle-o"></i>Animal</a></li>
                <li><a href="../../Registrar/Reg-persona/Reg-persona.php"><i class="fa fa-circle-o"></i>Persona</a></li>
              </ul>
              
              <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Ingresar</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                 <li><a href="../../Registrar/Reg-celo/Reg-celo.php"><i class="fa fa-circle-o"></i>Celo</a></li>
                 <li><a href="../../Registrar/Reg-pesaje/Reg-pesaje.php"><i class="fa fa-circle-o"></i>Pesaje</a></li>
                 <li><a href="../../Registrar/Reg-pesaje/Reg-pesaje.php"><i class="fa fa-circle-o"></i>Pesaje</a></li>
                  <li><a href="../../Registrar/Reg-ecografia/Reg-ecografia.php"><i class="fa fa-circle-o"></i>Ecografia</a></li>
                   <li><a href="../../Registrar/Reg-parto/Reg-parto.php"><i class="fa fa-circle-o"></i>Parto</a></li>
              </ul>
              
              <li class="treeview"><a href="#"><i class="fa fa-calendar"></i><span>Calendario</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                 <li><a href="../../agenda/indexC.php"><i class="fa fa-circle-o"></i>Calendario Ovino</a></li>
              </ul>
               <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Consultar</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../../Consultar/Cons-animal/Cons-animal.php"><i class="fa fa-circle-o"></i>Ovinos</a></li>
              
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-gears"></i><span>Configuracion</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../../registrar/Reg-Usuarios/Reg-usuarios.php"><i class="fa fa-circle-o"></i>Usuarios</a></li>
                <li><a href="../../Copia_Seguridad/Copia_Seguridad.php"><i class="fa fa-circle-o"></i>Copias de seguridad</a></li>
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
            <h1><i class="fa fa-th"></i> Registrar Persona</h1>
            <p>Desarrollo e implementación de App para el control de reproducción mediante una ruleta en la unidad de ovinos del centro agropecuario la granja Sena- Espinal Regional Tolima </p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">

              <!-- Button trigger modal -->
              <div class="row">
                <div class="col-md-4">
                  <button class="btn btn-primary icon-btn" type="button" data-toggle="modal" data-target="#abrir_formulario"><i class="fa fa-fw fa-lg fa-plus"></i>Registrar Persona</button>
                    <div class="col-md-8"></div>
                </div>
              </div>
              <br>

              <!-- Modal -->
              <div class="modal fade bs-example-modal-lg" id="abrir_formulario" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" >Registrar Persona</h4>
                    </div>
                    <div class="modal-body">
                      <div class="row">

                        <div class="col-md-4"> 
                          <div class="form-group" id="Contenedor_Recargar">
                            <label class="control-label" for="nom_Persona">Nombre Persona</label>
                            <input type="text" class="form-control" id="nom_Persona">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="tel_Persona" class="control-label">Telefono Persona</label>
                            <input type="number" class="form-control" id="tel_Persona">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="cor_Persona" class="control-label">Correo Electronico</label>
                            <input type="email" class="form-control" id="cor_Persona">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label" for="tip_Persona">Tipo Persona</label>
                            <select class="form-control" id="tip_Persona">
                            <option value="Selecciona">Selecciona el Tipo</option>
                            <option value="Instructor">Instructor</option>
                            <option value="Aprendiz">Aprendiz</option>
                            <option value="Externo">Externo</option>
                            </select>
                          </div >
                        </div>                        
                      </div>

                      
                    </div>
   
                    <div class="modal-footer">
                      <button type="button" id="cerrar_Modal" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                       <button class="btn btn-primary icon-btn" type="button" onclick="Registrar()"><i class="fa fa-fw fa-lg fa-floppy-o"></i>Guardar</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-body" id="Contenedor_Recargar">
                      <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                          <tr>
                            <th>Nombre Persona</th>
                            <th>Telefono</th>
                            <th>Correo Electronico</th>
                            <th>Tipo de Persona</th>
                              <th>Eliminar</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php 
                          $conexion->set_charset('utf8');
           $busqueda="SELECT * FROM `personas` WHERE 1";
     
          $query=mysqli_query($conexion,$busqueda);
          while ($fila=mysqli_fetch_row($query)){

            echo "<tr> ";

            echo "<td>$fila[1]  </td>";
            echo "<td>$fila[2]  </td>";
            echo "<td>$fila[3] </td>";
            echo "<td>$fila[4] </td>";          
            
          
           echo "<td><div><a class='btn btn-danger' href='eliminar-persona.php?id_Persona=".$fila['0']."'><i class='fa fa-lg fa-trash'></i></a></div></td>";


            echo "</tr>";

            }

          ?>
                        </tbody>
                      </table>
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
    <script src="../../../../assets/js/jquery-2.1.4.min.js"></script>
    <script src="../../../../assets/js/essential-plugins.js"></script>
    <script src="../../../../assets/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/plugins/pace.min.js"></script>
    <script src="../../../../assets/js/main.js"></script>
    <script type="text/javascript" src="../../../../assets/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript" src="../../../../assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../../../assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable( {
    language: {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
    }
} );

    </script>

    <script>
      function Registrar() {

      if (validar_nom_Persona() == true && validar_tel_Persona() == true && validar_cor_Persona() == true && validar_tip_Persona() ) {
        
        var nom_Persona = document.getElementById("nom_Persona").value;
        var tel_Persona = document.getElementById("tel_Persona").value;
        var cor_Persona = document.getElementById("cor_Persona").value;
        var tip_Persona = document.getElementById("tip_Persona").value;
        
        
        
        nom_Persona = nom_Persona.toUpperCase();
        tip_Persona = tip_Persona.toUpperCase();
        cor_Persona = cor_Persona.toUpperCase();
        

        $("#resultado").load("conexion/Conex-persona.php", {
            
            nom_Persona: nom_Persona,
            tel_Persona: tel_Persona,
            cor_Persona: cor_Persona,
            tip_Persona: tip_Persona,
            
            
        });
    } else {
        swal({
            title: 'Error!',
            text: "Algunos Campos Están Vacíos O Incorrectos",
            type: 'error',  
      
        })
    }
}

$(document).ready(inicio);

function inicio() {
    
    
    $("#nom_Persona").keyup(validar_nom_Persona);
    $("#tel_Persona").keyup(validar_tel_Persona);
    $("#cor_Persona").keyup(validar_cor_Persona);
    $("#tip_Persona").keyup(validar_tip_Persona);
   
   
  
}



function validar_nom_Persona() {
    var nom_Persona = document.getElementById("nom_Persona").value;
    if (nom_Persona == 0) {
        var nom_Persona = document.getElementById("nom_Persona").style.border = "2px solid red";
        return false;
    } else {
        var nom_Persona = document.getElementById("nom_Persona").style.border = "2px solid #4caf50";
        return true;
    }
}




function validar_tel_Persona() {
    var tel_Persona = document.getElementById("tel_Persona").value;
    if (tel_Persona.length == 0) {
        var tel_Persona = document.getElementById("tel_Persona").style.border = "2px solid red";
        return false;
    } else {
        var tel_Persona = document.getElementById("tel_Persona").style.border = "2px solid #4caf50";
        return true;
    }
} 

function validar_cor_Persona() {
    var cor_Persona = document.getElementById("cor_Persona").value;
    if (cor_Persona.length == 0) {
        var cor_Persona = document.getElementById("cor_Persona").style.border = "2px solid red";
        return false;
    } else {
        var cor_Persona = document.getElementById("cor_Persona").style.border = "2px solid #4caf50";
        return true;
    }
} 

function validar_tip_Persona() {
    var tip_Persona = document.getElementById("tip_Persona").value;
    if (tip_Persona == 0) {
        var tip_Persona = document.getElementById("tip_Persona").style.border = "2px solid red";
        return false;
    } else {
        var tip_Persona = document.getElementById("tip_Persona").style.border = "2px solid #4caf50";
        return true;
    }
} 



   </script> 




    

  </body>
</html>
<?php

}
else
{
  echo "<script type='text/javascript'>alert('Acceso Denegado');location='../../../../index.php?Acceso Denegado'</script>";
}  
?>