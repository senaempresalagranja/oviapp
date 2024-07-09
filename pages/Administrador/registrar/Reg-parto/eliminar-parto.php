<?php
	

	Eliminarparto($_GET['id_Parto']);

	function Eliminarparto($id_Parto)
	{
		include '../../../../assets/conexion/conexion.php';

		$sentencia="DELETE FROM partos WHERE id_Parto='".$id_Parto."' ";

		mysqli_query($conexion, $sentencia) or die (mysqli_error());
	}
?> 

<script type="text/javascript">

	
	alert("Parto Eliminado exitosamente");
	window.location.href='Reg-parto.php';
	

	
</script>