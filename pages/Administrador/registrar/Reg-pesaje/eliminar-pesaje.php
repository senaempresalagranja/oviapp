<?php
	

	EliminarPesaje($_GET['id_Pesaje']);

	function EliminarPesaje($id_Pesaje)
	{
		include '../../../../assets/conexion/conexion.php';

		$sentencia="DELETE FROM Pesajes WHERE id_Pesaje='".$id_Pesaje."' ";

		mysqli_query($conexion, $sentencia) or die (mysqli_error());
	}
?> 

<script type="text/javascript">

	
	alert("Pesaje Eliminado exitosamente");
	window.location.href='Reg-pesaje.php';
	

	
</script>