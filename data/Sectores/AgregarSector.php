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

	$conexion->crearConexion()->query("INSERT INTO tbsector (sectorid, sectornombre, sectorcapacidadpersonas, sectorcapacidadmesas, sectorestado) values ('$idSector','$nombreSector','$capacidadPersonasSector','$capacidadMesasSector', '$estadoSector');");
?>
