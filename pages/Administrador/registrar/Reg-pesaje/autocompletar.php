<?php

class N
{
	
	public function Opten ($codigo)
	{
		
include '../../../../assets/conexion/conexion.php';


	$fetch = mysqli_query($conexion,  "SELECT pes_Actual FROM animal  where id_Animal like '%".$codigo."%' LIMIT 0, 10");
		
$row = mysqli_fetch_assoc($fetch);
			//$id_Animal=$row['id_Animal'];
			//$row_array['value'] = $row['cod_Animal'];
			//$row_array['id_Animal']=$row['id_Animal'];
			//$row_array['cod_Animal']=$row['cod_Animal'];
			
			

			
			//array_push($return_arr,$row_array);
			return $row;
			
    }


/* Free connection resources. */
//mysqli_close($conexion);
	}


$obj= new N();
/* Toss back results as json encoded array. */
echo json_encode($obj->Opten($_POST["term"]));


?>