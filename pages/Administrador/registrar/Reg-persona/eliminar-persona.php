<?php
	

	Eliminarpersona($_GET['id_Persona']);

	function Eliminarpersona($id_Persona)
	{
		include '../../../../assets/conexion/conexion.php';

		$sentencia="DELETE FROM personas WHERE id_Persona='".$id_Persona."' ";

		mysqli_query($conexion, $sentencia) or die (mysqli_error());
	}
?> 

<script type="text/javascript">

	
	alert("Parto Eliminado exitosamente");
	window.location.href='Reg-parto.php';
	

	
</script>