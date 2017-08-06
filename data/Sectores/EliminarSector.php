<?php
	require_once("../Conexion.php");
	$conexion = new Conexion();
	
	$json = json_decode($_POST['json'],true);
 
	foreach ($json as $indice => $valor) {

		$idSector= $valor['idSector'];
	
		break;
	}

	$conexion->crearConexion()->query("DELETE FROM tbsector WHERE sectorid='$idSector';");
?>
