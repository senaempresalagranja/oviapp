

<?php

include '../../../../../assets/conexion/conexion.php';

$id_Animal=$_POST["id_Animal"];
$nom_Animal=$_POST["nom_Animal"];
$sex_Animal=$_POST["sex_Animal"];
$ori_Animal=$_POST["ori_Animal"];
$cod_Animal=$_POST["cod_Animal"];
$fec_Animal=$_POST["fec_Animal"];
$num_Partos=$_POST["num_Partos"];
$nom_Raza=$_POST["nom_Raza"];
$ind_Prenez=$_POST["ind_Prenez"];
$pes_Actual=$_POST["pes_Actual"];


// $conexion=mysqli_connect($local,$usuario,$contra,$bd);
$query="SELECT * FROM `animal` WHERE nom_Animal='$nom_Animal'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($fila==false) {



        // $conexion=mysqli_connect($local,$usuario,$contra,$bd);
      $query="INSERT INTO `animal`(`nom_Animal`, `sex_Animal`, `ori_Animal`, `cod_Animal`, `fec_Nacimiento`, `num_Partos`, `nom_Raza`, `ind_Prenez`, `pes_Actual`) VALUES ('$nom_Animal','$sex_Animal','$ori_Animal','$cod_Animal','$fec_Animal','$num_Partos','$nom_Raza','$ind_Prenez', '$pes_Actual')"; 

      $resource=mysqli_query($conexion,$query); 
if ($resource==true) {
echo "<script>

var cerrar_Modal=document.getElementById('cerrar_Modal').click();
    
    swal({
        title: 'Registro Exitoso!',
        text: 'Se ha Registrado Un Animal',
        type: 'success',
        confirmButtonColor: '#238276'
      })

$('#Contenedor_Recargar').load('Cargar/Cargar-Animal.php');

    </script>
";
  
}else{
  echo "<script>

    swal({
        title: 'Error!',
        text: 'Registro No Exitoso',
        type: 'error',
        confirmButtonColor: '#238276'
      })

    </script>";
}


}else {
  echo "<script>

    swal({
        title: 'Error!',
        text: 'El Lote $nom_Animal Ya Existe',
        type: 'error',
        confirmButtonColor: '#238276'
      })

    </script>";
}




 ?>