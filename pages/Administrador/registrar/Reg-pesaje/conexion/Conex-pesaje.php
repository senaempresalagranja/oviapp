

<?php

include '../../../../../assets/conexion/conexion.php';

$pes_Kg_Animal=$_POST["pes_Kg_Animal"];
$fec_Peso=$_POST["fec_Peso"];
$observacion=$_POST["observacion"];
$id_Animal=$_POST["id_Animal"];
$id_Persona=$_POST["id_Persona"];
$gan_Peso=$_POST["gan_Peso"];







		
			$query="INSERT INTO `pesajes`( `id_Animal`, `id_Persona`, `pes_Kg_Animal`, `observacion`, `fec_Peso`, `gan_Peso`) 
			 
			VALUES ('$id_Animal','$id_Persona' ,'$pes_Kg_Animal','$observacion',' $fec_Peso' ,'$gan_Peso')"; 	

			$resource=mysqli_query($conexion,$query);	
if ($resource==true) {
echo "<script>


var cerrar_Modal=document.getElementById('cerrar_Modal').click();	

		swal({
        title: 'Registro Exitoso!',
        text: 'Se ha Registrado Un Pesaje ',
        type: 'success',
        confirmButtonColor: '#238276'
      })
      
$('#Contenedor_Recargar').load('Cargar/Cargar-pesaje.php');


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







 ?>