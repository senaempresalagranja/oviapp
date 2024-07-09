

<?php

include '../../../../../assets/conexion/conexion.php';

$fec_Ecografia=$_POST["fec_Ecografia"];
$id_Persona=$_POST["id_Persona"];
$id_Animal=$_POST["id_Animal"];
$res_Ecografia=$_POST["res_Ecografia"];






// $conexion=mysqli_connect($local,$usuario,$contra,$bd);
$query="SELECT * FROM `Ecografias` WHERE fec_Ecografia = '$fec_Ecografia' ";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($fila==false) {



		
			$query="INSERT INTO `ecografias`( `fec_Ecografia`, `id_Persona`, `id_Animal`, `res_Ecografia`)
			 
			VALUES ('$fec_Ecografia','$id_Persona','$id_Animal','$res_Ecografia')"; 	

			$resource=mysqli_query($conexion,$query);	
if ($resource == true) {
echo "<script>


var cerrar_Modal=document.getElementById('cerrar_Modal').click();	

		swal({
        title: 'Registro Exitoso!',
        text: 'Se ha Registrado Una Ecografia',
        type: 'success',
        confirmButtonColor: '#238276'
      })
      
$('#Contenedor_Recargar').load('Cargar/Cargar-ecografias.php');


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
  			text: 'La Ecografia $fec_Ecografia Ya Existe',
  			type: 'error',
  			confirmButtonColor: '#238276'
			})

	  </script>";
}




 ?>