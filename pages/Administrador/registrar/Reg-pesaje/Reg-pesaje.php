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
    <title> Registrar Pesaje</title>

  </head>
  <body class="sidebar-mini fixed sidebar-collapse">
    <div class="wrapper">
      <header class="main-header hidden-print"><a class="logo" style="background-color:#426d6f;" href="../../index.php">Menu Principal</a>
        <nav class="navbar navbar-static-top" style="background-color:#426d6f;">
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
            <li class="active"><a href="../../index.php"><i class="fa fa-home"></i><span>Inicio</span></a></li>
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
            <h1><i class="fa fa-th"></i> Registrar Pesaje</h1>
            <p>Desarrollo e implementación de App para el control de reproducción mediante una ruleta en la unidad de ovinos del centro agropecuario la granja Sena- Espinal Regional Tolima </p>
          </div>
        </div>
 <div class="row">
          <div class="col-md-12">
            <div class="card">
       

              <!-- Button trigger modal -->
              <div class="row">
                <div class="col-md-4">
                  <button class="btn btn-primary icon-btn" type="button" data-toggle="modal" data-target="#abrir_formulario"><i class="fa fa-fw fa-lg fa-plus"></i>Registrar Pesaje</button>
                    <div class="col-md-"></div>
                </div>
              </div>
              <br>

              <!-- Modal -->
              <div class="modal fade bs-example-modal-lg" id="abrir_formulario" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" >Registrar Pesaje</h4>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                          <div class="row col-lg-11">                        
                   

                       <div class="col-md-4">
                          <div class="form-group">
                            <label for="fec_Peso" class="control-label">Fecha Peso</label>
                            <input type="date" class="form-control" id="fec_Peso"> 
                          </div>
                        </div>

                      <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label" for="id_Animal">Codigo Animal</label>
                            <select class="form-control" id="id_Animal" onchange="mostrar_codigo()">
                            <option value="Selecciona" selected="selected">Selecciona Codigo Animal</option>
                             <?php  
                      
                      $query="SELECT * FROM `animal`";
                      $resource=mysqli_query($conexion,$query);
                      while ($fila=mysqli_fetch_row($resource)) {
                      echo " <option value='$fila[0]'> $fila[4] </option> onclick='validar_animal()'";
                      }
                      ?>
                            </select>
                          </div>
                        </div>
                      

                         
                      <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label" for="id_Persona">Encargado</label>
                            <select class="form-control" id="id_Persona">
                            <option value="Selecciona">Selecciona Encargado</option>
                             <?php  
                      
                      $query="SELECT * FROM `personas`";
                      $resource=mysqli_query($conexion,$query);
                      while ($fila=mysqli_fetch_row($resource)) {
                      echo " <option value='$fila[0]'> $fila[1] </option> ";
                      }
                      ?>
                            </select>
                          </div>
                        </div>
                      </div>
                        


                          <div class="col-md-3">
                          <div class="form-group">
                            <label for="pes_Kg_Animal" class="control-label">Peso Animal (Kg)</label>
                            <input type="number" class="form-control" id="pes_Kg_Animal" onkeyup="ganancia()">
                          </div>
                        </div>


                         <div class="col-md-3">
                          <div class="form-group" id="contenedor_peso">
                            <label for="pes_Actual" class="control-label">Peso Actual (Kg)</label>
                            <input type="button" class="form-control" id="pes_Actual" onkeyup="ganancia()">
                          </div>
                        </div>

                       <div class="col-md-3">
                          <div class="form-group">
                            <label for="gan_Peso" class="control-label">Ganancia Peso (Kg)</label>
                            <input type="text" class="form-control" id="gan_Peso" onkeyup ="ganancia()">


                          </div>
                        </div>
                        

                         <div class="col-md-3">
                          <div class="form-group">
                            <label for="observacion" class="control-label">Observaciones</label>
                            <input type="text" class="form-control" id="observacion">
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
                            <th>Fecha Peso</th>
                            <th>Peso Animal (Kg)</th>
                            <th>Peso Actual (Kg)</th>
                            <th>Ganancia Peso (Kg)</th>
                            <th>Encargado</th>
                            <th>Eliminar</th>
                            
                            
                          </tr>
                        </thead>
                        <tbody>
                          
                         <?php 
            $busqueda="SELECT `id_Pesaje`, `pes_Kg_Animal`, animal.cod_Animal, `fec_Peso`, `gan_Peso`, `observacion`, personas.nom_Persona, animal.pes_Actual FROM `pesajes` INNER JOIN animal on animal.id_Animal= pesajes.id_Animal INNER JOIN personas on personas.id_Persona = pesajes.id_Persona ORDER BY `pesajes`.`id_Pesaje` DESC";
     
          $query=mysqli_query($conexion,$busqueda);
          while ($fila=mysqli_fetch_row($query)){

            echo "<tr> ";
            echo "<td>$fila[2]  </td>";
            echo "<td>$fila[3]  </td>";
            echo "<td>$fila[1]  </td>";
            echo "<td>$fila[7]  </td>";
            echo "<td>$fila[4] </td>";
            echo "<td>$fila[6] </td>";
                
     
            echo "<td><div><a class='btn btn-danger' href='eliminar-pesaje.php?id_Pesaje=".$fila['0']."'><i class='fa fa-lg fa-trash'></i></a></div></td>";

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

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

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

    //  function mostrar_codigo(){
      //  var id_Animal=document.getElementById('id_Animal').value;
        //$("#contenedor_peso").load("../mostrar/most_peso.php",{id_Animal:id_Animal})


      //}
    </script>
    <script>


      function ganancia(){
        var pes_Kg_Animal = document.getElementById("pes_Kg_Animal").value;
        var pes_Actual = document.getElementById("pes_Actual").value;
        var gan_Peso =   pes_Kg_Animal - pes_Actual;
      
        document.getElementById("gan_Peso").value = gan_Peso;

        
      }


      function Registrar() {

      if (validar_pes_Kg_Animal() == true  && validar_fec_Peso() == true && validar_gan_Peso() == true  ) {
        
       
        var observacion = document.getElementById("observacion").value.toUpperCase();
        
        var pes_Kg_Animal = document.getElementById("pes_Kg_Animal").value;
        var id_Animal = document.getElementById("id_Animal").value;
        var fec_Peso = document.getElementById("fec_Peso").value;
        var gan_Peso = document.getElementById("gan_Peso").value;
        var id_Persona = document.getElementById("id_Persona").value;
        

        $("#resultado").load("conexion/Conex-pesaje.php", {
            
            pes_Kg_Animal: pes_Kg_Animal,
            observacion: observacion,
            id_Persona: id_Persona,
            id_Animal: id_Animal,
            fec_Peso: fec_Peso,
            gan_Peso: gan_Peso,
         
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
    
    
    $("#pes_Kg_Animal").keyup(validar_pes_Kg_Animal);
    $("#observacion").keyup(validar_observacion);
    $("#fec_Peso").keyup(validar_fec_Peso);
    $("#gan_Peso").keyup(validar_gan_Peso);
    $("#id_Animal").keyup(validar_codOvino);
    $("#id_Persona").keyup(validar_persona);
 
  
}



function validar_pes_Kg_Animal() {
    var pes_Kg_Animal = document.getElementById("pes_Kg_Animal").value;
    if (pes_Kg_Animal == 0) {
        var pes_Kg_Animal = document.getElementById("pes_Kg_Animal").style.border = "2px solid red";
        return false;
    } else {
        var pes_Kg_Animal = document.getElementById("pes_Kg_Animal").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_persona() {
    var id_Persona = document.getElementById("id_Persona").value;
    if (id_Persona == "Selecciona") {
        var id_Persona = document.getElementById("id_Persona").style.border = "2px solid red";
        return false;
    } else {
        var id_Persona = document.getElementById("id_Persona").style.border = "2px solid #4caf50";
        return true;
    }
} 


function validar_codOvino() {
    var id_Animal = document.getElementById("id_Animal").value;
    if (id_Animal== "Selecciona") {
        var id_Animal = document.getElementById("id_Animal").style.border = "2px solid red";
        return false;
    } else {
        var id_Animal = document.getElementById("id_Animal").style.border = "2px solid #4caf50";
        return true;
    }
} 




/*function validar_observacion() {
    var observacion = document.getElementById("observacion").value;
    if (observacion.length == 0) {
        var observacion = document.getElementById("observacion").style.border = "2px solid red";
        return false;
    } else {
        var observacion = document.getElementById("observacion").style.border = "2px solid #4caf50";
        return true;
    }
} */

function validar_fec_Peso() {
    var fec_Peso = document.getElementById("fec_Peso").value;
    if (fec_Peso.length == 0) {
        var fec_Peso = document.getElementById("fec_Peso").style.border = "2px solid red";
        return false;
    } else {
        var fec_Peso = document.getElementById("fec_Peso").style.border = "2px solid #4caf50";
        return true;
    }
} 

function validar_gan_Peso() {
    var gan_Peso = document.getElementById("gan_Peso").value;
    if (gan_Peso.length == 0) {
        var gan_Peso = document.getElementById("gan_Peso").style.border = "2px solid red";
        return false;
    } else {
        var gan_Peso = document.getElementById("gan_Peso").style.border = "2px solid #4caf50";
        return true;
    }
} 

   </script> 
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script>

     function mostrar_codigo(){
      var codigo = document.getElementById("id_Animal").value;
      $.ajax({
        type: "POST",
        data: "term="+codigo,
        url: "autocompletar.php",
        success:function(r){
          datos= jQuery.parseJSON(r);
           $('#pes_Actual').val(datos['pes_Actual']);
           
        }

      });
          
        
     }

     $("#cod_Animal").on("keydown", function(event){
      if (event.keyCode== $.ui.keyCode.LEFT || event.keyCode== $.ui.keyCode.RIGHT || event.keyCode== $.ui.keyCode.UP || event.keyCode== $.ui.keyCode.DOWN || event.keyCode== $.ui.keyCode.DELETE || event.keyCode== $.ui.keyCode.BACKSPACE )
            {
              $("#id_Animal").val("");
              $("#pes_Actual" ).val("");
     }

             if (event.keyCode==$.ui.keyCode.DELETE){
              $("#cod_Animal").val("");
              $("#id_Animal").val("");
              $("#pes_Actual" ).val("");
              }
                  }
                  );  
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