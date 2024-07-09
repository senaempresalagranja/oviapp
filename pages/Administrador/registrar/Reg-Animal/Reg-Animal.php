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
    <title> Registrar Animal</title>

  </head>
  <body class="sidebar-mini fixed sidebar-collapse">
    <div class="wrapper">
      <header class="main-header hidden-print"><a class="logo" style="background-color:#426d6f; href="../../index.php">Menu Principal</a>
        <nav class="navbar navbar-static-top" style="background-color:#426d6f;">
          <!-- Sidebar toggle button-->  <a class="sidebar-toggle " href="#" data-toggle="offcanvas"></a>
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
            <h1><i class="fa fa-th"></i> Registrar Animal</h1>
            <p>Desarrollo e implementación de App para el control de reproducción mediante una ruleta en la unidad de ovinos del centro agropecuario la granja Sena- Espinal Regional Tolima </p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">

              <!-- Button trigger modal -->
              <div class="row">
                <div class="col-md-4">
                  <button class="btn btn-primary icon-btn" type="button" data-toggle="modal" data-target="#abrir_formulario"><i class="fa fa-fw fa-lg fa-plus"></i>Registrar Animal</button>
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
                      <h4 class="modal-title" >Registrar Animal</h4>
                    </div>
                    <div class="modal-body">
                      <div class="row">

                        <div class="col-md-4"> 
                          <div class="form-group" id="Contenedor_Recargar">
                            <label class="control-label" for="cod_Animal">Codigo Animal</label>
                            <input type="text" class="form-control" id="cod_Animal">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="nom_Animal" class="control-label">Nombre Animal</label>
                            <input type="text" class="form-control" id="nom_Animal">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="fec_Animal" class="control-label">Fecha Nacimiento o Ingreso</label>
                            <input type="date" class="form-control" id="fec_Animal">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label" for="sex_Animal">Sexo</label>
                            <select class="form-control" id="sex_Animal">
                            <option value="Selecciona">Selecciona el Sexo</option>
                            <option value="Macho">Macho</option>
                            <option value="Hembra">Hembra</option>
                            </select>
                          </div >
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label" for="ori_Animal">Origen Animal</label>
                            <select class="form-control" id="ori_Animal">
                            <option value="Selecciona">Selecciona el Origen</option>
                            <option value="Interno">Interno</option>
                            <option value="Externo">Externo</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label" for="nom_Raza">Nombre Raza</label>
                            <select class="form-control" id="nom_Raza">
                            <option value="Selecciona">Selecciona la Raza</option>
                            <option value="Katahdin">Kathadin</option>
                            <option value="Pelibuey">Pelibuey</option>
                            <option value="Creces">Cruces</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="num_Partos" class="control-label">Numero Partos</label>
                            <input type="number" class="form-control" id="num_Partos">
                          </div>
                        </div>

                          <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label" for="ind_Prenez">Indicador de Preñez</label>
                            <select class="form-control" id="ind_Prenez">
                            <option value="Selecciona">Selecciona Indicador</option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>                        
                            </select>
                          </div>
                        </div>     

                         <div class="col-md-4">
                          <div class="form-group">
                            <label for="pes_Actual" class="control-label">Peso Actual</label>
                            <input type="text" class="form-control" id="pes_Actual">
                          </div>
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
                            <th>Codigo Animal</th>
                            <th>Fecha Nacimiento o Ingreso</th>
                            <th>Nombre</th>
                            
                            <th>Raza</th>
                            <th>Origen</th>
                            <th>Numero Partos</th>
                            <th>Indicador de Preñez</th>
                            <th>Peso Actual</th>
                            <th>Eliminar</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                         <?php 
                         $conexion->set_charset('utf8');
            $busqueda="SELECT * FROM `animal` WHERE 1";
     
          $query=mysqli_query($conexion,$busqueda);
          while ($fila=mysqli_fetch_row($query)){

            echo "<tr> ";

            echo "<td>$fila[4] </td>";
            echo "<td>$fila[5] </td>";
            echo "<td>$fila[1] </td>";
              
            echo "<td>$fila[7] </td>";
            echo "<td>$fila[3] </td>";
            echo "<td>$fila[6] </td>";
            echo "<td>$fila[8] </td>";
            echo "<td>$fila[9] </td>";
          
            echo "<td><div><a class='btn btn-danger' href='eliminar-animal.php?id_Animal=".$fila['0']."'><i class='fa fa-lg fa-trash'></i></a></div></td>";

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

      if (validar_nom_Animal() == true && validar_sex_Animal() == true && validar_ori_Animal() == true && validar_cod_Animal() == true && validar_fec_Animal() == true && validar_num_Partos() == true && validar_nom_Raza() && validar_ind_Prenez() == true &&  validar_pes_Actual() == true) {
        
        var nom_Animal = document.getElementById("nom_Animal").value;
        var sex_Animal = document.getElementById("sex_Animal").value;
        var ori_Animal = document.getElementById("ori_Animal").value;
        var cod_Animal = document.getElementById("cod_Animal").value;
        var fec_Animal = document.getElementById("fec_Animal").value;
        var num_Partos = document.getElementById("num_Partos").value;
        var nom_Raza = document.getElementById("nom_Raza").value;
        var ind_Prenez = document.getElementById("ind_Prenez").value;
        var pes_Actual = document.getElementById("pes_Actual").value;

        
        nom_Animal = nom_Animal.toUpperCase();
        sex_Animal = sex_Animal.toUpperCase();
        ori_Animal = ori_Animal.toUpperCase();
        nom_Raza = nom_Raza.toUpperCase();
        ind_Prenez = ind_Prenez.toUpperCase();

        $("#resultado").load("conexion/Conex-Animal.php", {
            
            nom_Animal: nom_Animal,
            sex_Animal: sex_Animal,
            ori_Animal: ori_Animal,
            cod_Animal: cod_Animal,
            fec_Animal: fec_Animal,
            num_Partos: num_Partos,
            nom_Raza: nom_Raza,
            ind_Prenez: ind_Prenez,
            pes_Actual: pes_Actual,
            
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
    
    
    $("#nom_Animal").keyup(validar_nom_Animal);
    $("#sex_Animal").keyup(validar_sex_Animal);
    $("#ori_Animal").keyup(validar_ori_Animal);
    $("#cod_Animal").keyup(validar_cod_Animal);
    $("#fec_Animal").keyup(validar_fec_Animal);
    $("#num_Partos").keyup(validar_num_Partos);
    $("#nom_Raza").keyup(validar_nom_Raza);
    $("#ind_Prenez").keyup(validar_ind_Prenez);
    $("#pes_Actual").keyup(validar_pes_Actual);
   
  
}



function validar_nom_Animal() {
    var nom_Animal = document.getElementById("nom_Animal").value;
    if (nom_Animal == 0) {
        var nom_Animal = document.getElementById("nom_Animal").style.border = "2px solid red";
        return false;
    } else {
        var nom_Animal = document.getElementById("nom_Animal").style.border = "2px solid #4caf50";
        return true;
    }
}




function validar_sex_Animal() {
    var sex_Animal = document.getElementById("sex_Animal").value;
    if (sex_Animal.length == 0) {
        var sex_Animal = document.getElementById("sex_Animal").style.border = "2px solid red";
        return false;
    } else {
        var sex_Animal = document.getElementById("sex_Animal").style.border = "2px solid #4caf50";
        return true;
    }
} 

function validar_ori_Animal() {
    var ori_Animal = document.getElementById("ori_Animal").value;
    if (ori_Animal.length == 0) {
        var ori_Animal = document.getElementById("ori_Animal").style.border = "2px solid red";
        return false;
    } else {
        var ori_Animal = document.getElementById("ori_Animal").style.border = "2px solid #4caf50";
        return true;
    }
} 

function validar_cod_Animal() {
    var cod_Animal = document.getElementById("cod_Animal").value;
    if (cod_Animal == 0) {
        var cod_Animal = document.getElementById("cod_Animal").style.border = "2px solid red";
        return false;
    } else {
        var cod_Animal = document.getElementById("cod_Animal").style.border = "2px solid #4caf50";
        return true;
    }
} 

function validar_fec_Animal() {
    var fec_Animal = document.getElementById("fec_Animal").value;
    if (fec_Animal.length == 0) {
        var fec_Animal = document.getElementById("fec_Animal").style.border = "2px solid red";
        return false;
    } else {
        var fec_Animal = document.getElementById("fec_Animal").style.border = "2px solid #4caf50";
        return true;
    }
} 

function validar_num_Partos() {
    var num_Partos = document.getElementById("num_Partos").value;
    if (num_Partos.length == 0) {
        var num_Partos = document.getElementById("num_Partos").style.border = "2px solid red";
        return false;
    } else {
        var num_Partos = document.getElementById("num_Partos").style.border = "2px solid #4caf50";
        return true;
    }
} 

function validar_nom_Raza() {
    var nom_Raza = document.getElementById("nom_Raza").value;
    if (nom_Raza.length == 0) {
        var nom_Raza = document.getElementById("nom_Raza").style.border = "2px solid red";
        return false;
    } else {
        var nom_Raza = document.getElementById("nom_Raza").style.border = "2px solid #4caf50";
        return true;
    }
} 


function validar_ind_Prenez() {
    var ind_Prenez = document.getElementById("ind_Prenez").value;
    if (ind_Prenez.length == 0) {
        var ind_Prenez = document.getElementById("ind_Prenez").style.border = "2px solid red";
        return false;
    } else {
        var ind_Prenez = document.getElementById("ind_Prenez").style.border = "2px solid #4caf50";
        return true;
    }
} 

function validar_pes_Actual() {
    var pes_Actual = document.getElementById("pes_Actual").value;
    if (pes_Actual.length == 0) {
        var pes_Actual = document.getElementById("pes_Actual").style.border = "2px solid red";
        return false;
    } else {
        var pes_Actual = document.getElementById("pes_Actual").style.border = "2px solid #4caf50";
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