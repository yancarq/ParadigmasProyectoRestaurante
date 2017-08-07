<?php
	class funcionesSector{
		require_once("Conexion.php");
		$conexion = new Conexion();

		function eliminarSector($sectorId){

			$eliminar = $this->$conexion->crearConexion()->query("DELETE FROM tbsector WHERE sectorid='$sectorId';");
	        
	        if($eliminar != 1)
	          	throw new Exception("Error al eliminar el sector");
		}

		function mostrarSector($sectorId){
			$query = $conexion->crearConexion()->query("SELECT * FROM tbsector WHERE tbsector.sectorid='$sectorId'");

			$devolver[] = array();

			if($query!=null){
				while($resultado = $query->fetch_assoc()){
					$devolver[]=$resultado;
				}
			}

			$conexion->cerrarConexion();

			return $devolver;
		}

		function modificarSector($sector){
			$secorId= $sector->getSectorId();
	        $sectorNombre= $sector->getSectorNombre();
	        $sectorCapacidadPersonas= $sector->getSectorCapacidadPersonas();
	        $sectorCapacidadMesas= $sector->getSectorCapacidadMesas();
	        $sectorEstado= $sector->getSectorEstado();

	       	$modificar = $this->$conexion->crearConexion()->query("UPDATE tbsector SET sectornombre='$sectorNombre', sectorcapacidadpersonas='$sectorCapacidadPersonas', sectorcapacidadmesas='$sectorCapacidadMesas', sectorestado='$sectorEstado' WHERE sectorid='$secorId';");
	        
	        if($modificar != 1)
	          	throw new Exception("Error al modificar el sector");
		}

		function insertarSector($sector){
	        $secorId= $sector->getSectorId();
	        $sectorNombre= $sector->getSectorNombre();
	        $sectorCapacidadPersonas= $sector->getSectorCapacidadPersonas();
	        $sectorCapacidadMesas= $sector->getSectorCapacidadMesas();
	        $sectorEstado= $sector->getSectorEstado();
	            
	       	$insertar = $this->$conexion->crearConexion()->query("INSERT INTO tbsector (sectorid, sectornombre, sectorcapacidadpersonas, sectorcapacidadmesas, sectorestado) values ('$secorId','$sectorNombre','$sectorCapacidadPersonas','$sectorCapacidadMesas', '$sectorEstado');");
	        if($insertar != 1)
	          	throw new Exception("Error al insertar el sector");
	      
	    }
    }
?>
