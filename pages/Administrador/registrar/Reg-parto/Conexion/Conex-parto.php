

<?php

include '../../../../../assets/conexion/conexion.php';

$id_Animal=$_POST["id_Animal"];
$id_Persona=$_POST["id_Persona"];
$fec_Parto=$_POST["fec_Parto"];
$num_AnimalParido=$_POST["num_AnimalParido"];
$num_AnimalVivo=$_POST["num_AnimalVivo"];
$num_AnimalMuerto=$_POST["num_AnimalMuerto"];
$num_AnimalMacho=$_POST["num_AnimalMacho"];
$num_AnimalHembra=$_POST["num_AnimalHembra"];
$fec_Destete=$_POST["fec_Destete"];






				// $conexion=mysqli_connect($local,$usuario,$contra,$bd  VALUES ('$id_Finca','$nombre_Lote','$Tamano')"; );
			$query="INSERT INTO `partos`( `id_Animal`, `fec_Parto`, `num_AnimalParido`, `num_AnimalVivo`, `num_AnimalMuerto`, `num_AnimalMacho`, `num_AnimalHembra`, `fec_Destete`, `id_Persona`) 
					VALUES ('$id_Animal', '$fec_Parto', '$num_AnimalParido', '$num_AnimalVivo','$num_AnimalMuerto', '$num_AnimalMacho', '$num_AnimalHembra',' $fec_Destete', '$id_Persona')"; 	

			$resource=mysqli_query($conexion,$query);	
if ($resource==true) {
echo "<script>


		
		swal({
        title: 'Registro Exitoso!',
        text: 'Se ha Registrado Una Recepcion ',
        type: 'success',
        confirmButtonColor: '#238276'
      })


$('#Contenedor_Recargar').load('cargar/Cargar-partos.php');

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