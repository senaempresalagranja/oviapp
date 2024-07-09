
<?php include '../../../../../assets/conexion/conexion.php'; ?>

<table class="table table-hover table-bordered" id="sampleTable">
                         <thead>
                          <tr>
                            <th>Codigo Animal</th>
                            <th>Fecha Peso</th>
                            <th>Peso Animal (Kg)</th>
                            <th>Peso Actual (Kg)</th>
                            <th>Ganancia Peso (Kg)</th>
                            <th>Encargado</th>
                            <th>Observaciones</th>
    
                            
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
            echo "<td>$fila[5] </td>";          
     
            // echo "<td><div><a class='btn btn-info btn-flat' href='#'><i class='fa fa-lg fa-refresh'></i></a></div></td>";

            echo "</tr>";

            }

          ?>
                        </tbody>
                      </table>



<script src="../../../../assets/js/jquery-2.1.4.min.js"></script>
    <script src="../../../../assets/js/essential-plugins.js"></script>
    <script src="../../../../assets/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/plugins/pace.min.js"></script>
   
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