

<?php

include '../../../../../assets/conexion/conexion.php';

$fec_Inicio=$_POST["fec_Inicio"];
$fec_Final=$_POST["fec_Final"];
$observacion=$_POST["observacion"];
$id_Animal=$_POST["id_Animal"];
$id_Persona=$_POST["id_Persona"];




// $conexion=mysqli_connect($local,$usuario,$contra,$bd);
$query="SELECT * FROM `celos` WHERE id_Animal = $id_Animal ";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($fila==false) {


		
			$query="INSERT INTO `celos`(`id_Animal`, `id_Persona`, `fec_Inicio`, `fec_Final`, `observaciones`) 
			 
			VALUES ('$id_Animal','$id_Persona','$fec_Inicio','$fec_Final','$observacion')"; 	

			$resource=mysqli_query($conexion,$query);	
if ($resource==true) {
echo "<script>


var cerrar_Modal=document.getElementById('cerrar_Modal').click();	

		swal({
        title: 'Registro Exitoso!',
        text: 'Se ha Registrado Un Celo ',
        type: 'success',
        confirmButtonColor: '#238276'
      })
      
$('#Contenedor_Recargar').load('Cargar/Cargar-celo.php');


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
  			text: 'El celo $id_Animal Ya Existe',
  			type: 'error',
  			confirmButtonColor: '#238276'
			})

	  </script>";
}




 ?>