<?php
	

	Eliminaranimal($_GET['id_Animal']);

	function Eliminaranimal($id_Animal)
	{
		include '../../../../assets/conexion/conexion.php';

		$sentencia="DELETE FROM animal WHERE id_Animal='".$id_Animal."' ";

		mysqli_query($conexion, $sentencia) or die (mysqli_error());
	}
?> 

<script type="text/javascript">

	
	alert("Animal Eliminado exitosamente");
	window.location.href='Reg-Animal.php';
	

	
</script>