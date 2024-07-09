<?php
	

	Eliminarecografia($_GET['id_Ecografia']);

	function Eliminarecografia($id_Ecografia)
	{
		include '../../../../assets/conexion/conexion.php';

		$sentencia="DELETE FROM ecografias WHERE id_Ecografia='".$id_Ecografia."' ";

		mysqli_query($conexion, $sentencia) or die (mysqli_error());
	}
?> 

<script type="text/javascript">

	
	alert("Ecografia Eliminada exitosamente");
	window.location.href='Reg-ecografia.php';
	

	
</script>