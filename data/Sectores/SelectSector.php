<?php
	require_once("../Conexion.php");
	$conexion = new Conexion();

	$json = json_decode($_POST['json'],true);
	 
	foreach ($json as $indice => $valor) {

		$idSector = $valor['idSector'];
		
		break;
	}
	
	$query = $conexion->crearConexion()->query("SELECT * FROM tbsector WHERE tbsector.sectorid='$idSector'");

	$devolver[] = array();

	if($query!=null){
		while($resultado = $query->fetch_assoc()){
			$devolver[]=$resultado;
		}
	}

	$conexion->cerrarConexion();

	json_encode($devolver);

	return $devolver;

?>
