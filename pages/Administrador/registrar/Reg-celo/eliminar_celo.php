<?php


	Eliminarcelo($_GET['id_Celo']);

	function Eliminarcelo($id_Celo){
		include '../../../../assets/conexion/conexion.php';

		$sentencia="DELETE FROM celos WHERE id_Celo='".$id_Celo."' ";

		mysqli_query($conexion, $sentencia) or die (mysqli_error());

	}
?>

<script type="text/javascript">
	
	alert("El Celo Ha Sido Eliminado Correctamente");
	window.location.href='Reg-celo.php';

</script>