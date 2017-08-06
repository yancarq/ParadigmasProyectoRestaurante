<?php

	require_once("../Conexion.php");
	$conexion = new Conexion();

	$json = json_decode($_POST['json'],true);
	foreach ($json as $indice => $valor) {
		
		$idSector = $valor['idsector'];
		$nombreSector =  $valor['nombreSector'];
		$capacidadPersonasSector =  $valor['capacidadPersonasSector'];
		$capacidadMesasSector =  $valor['capacidadMesasSector'];
		$estadoSector = $valor['estadoSector'];

    		break;
	}

	
	$conexion->crearConexion()->query("UPDATE tbsector SET sectornombre='$nombreSector', sectorcapacidadpersonas='$capacidadMesasSector', sectorcapacidadmesas='$estadoSector' WHERE sectorid='$idSector';");
	
?>
