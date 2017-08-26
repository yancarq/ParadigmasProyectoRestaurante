<?php
	include "conexion.php";
	include "../domain/Sector.php";

	class funcionesSector {

		public function eliminarSector($sectorId){
			$conexion = new Conexion();
			$eliminar = $this->$conexion->crearConexion()->query("DELETE FROM tbsector WHERE sectorid='$sectorId';");

	        if($eliminar != 1)
	          	throw new Exception("Error al eliminar el sector");
		}

		public function mostrarSector($sectorId){
			$conexion = new Conexion();
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

		public function modificarSector($sector){
			$conexion = new Conexion();
			$secorId= $sector->getSectorId();
	        $sectorNombre= $sector->getSectorNombre();
	        $sectorCapacidadPersonas= $sector->getSectorCapacidadPersonas();
	        $sectorCapacidadMesas= $sector->getSectorCapacidadMesas();
	        $sectorEstado= $sector->getSectorEstado();

	       	$modificar = $this->$conexion->crearConexion()->query("UPDATE tbsector SET sectornombre='$sectorNombre', sectorcapacidadpersonas='$sectorCapacidadPersonas', sectorcapacidadmesas='$sectorCapacidadMesas', sectorestado='$sectorEstado' WHERE sectorid='$secorId';");

	        if($modificar != 1)
	          	throw new Exception("Error al modificar el sector");
		}

		public function insertarSector($sector){
			$conexion = new Conexion();
	        $sectorId= $sector->getSectorId();
	        $sectorNombre= $sector->getSectorNombre();
	        $sectorCapacidadPersonas= $sector->getSectorCapacidadPersona();
	        $sectorCapacidadMesas= $sector->getSectorCantidadMesa();
	        $sectorEstado= $sector->getSectorEstado();

	       	$consulta ="INSERT INTO tbsector (sectorid, sectornombre, sectorcapacidadpersonas, sectorcapacidadmesas, sectorestado) VALUES ('$sectorId', '$sectorNombre', '$sectorCapacidadPersonas', '$sectorCapacidadMesas', '$sectorEstado')";
	     
			if(!$conexion->crearConexion()->query($consulta)){
				
					echo "Error al Registrar";
			}else{
				echo "Registro exitoso!!!";
			}
			$conexion->cerrarConexion();
	    }	
    }
?>
