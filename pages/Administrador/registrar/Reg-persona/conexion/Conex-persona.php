

<?php

include '../../../../../assets/conexion/conexion.php';

$id_Animal=$_POST["id_Persona"];
$nom_Persona=$_POST["nom_Persona"];
$tel_Persona=$_POST["tel_Persona"];
$cor_Persona=$_POST["cor_Persona"];
$tip_Persona=$_POST["tip_Persona"];



// $conexion=mysqli_connect($local,$usuario,$contra,$bd);
$query="SELECT * FROM `personas` WHERE nom_Persona='$nom_Persona'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($fila==false) {



        // $conexion=mysqli_connect($local,$usuario,$contra,$bd);
      $query="INSERT INTO `personas`(`nom_Persona`, `tel_Persona`, `cor_Persona`, `tip_Persona`) VALUES ('$nom_Persona','$tel_Persona','$cor_Persona','$tip_Persona')"; 

      $resource=mysqli_query($conexion,$query); 
if ($resource==true) {
echo "<script>

var cerrar_Modal=document.getElementById('cerrar_Modal').click();
    
    swal({
        title: 'Registro Exitoso!',
        text: 'Se ha Registrado Un personas',
        type: 'success',
        confirmButtonColor: '#238276'
      })

$('#Contenedor_Recargar').load('Cargar/Cargar-personas.php');

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
        text: 'El Lote $nom_Persona Ya Existe',
        type: 'error',
        confirmButtonColor: '#238276'
      })

    </script>";
}




 ?>