<?php
	include "Conexion.php";
	include "../domain/Vegetales.php";

  class dataVegetal {

  	   public function eliminarVegetal($vegetalId){
  					$conexion = new Conexion();
  					$eliminar = $this->$conexion->crearConexion()->query("DELETE FROM tbvegetales WHERE vegetalid='$vegetalId';");

  	        if($eliminar != 1)
  	          	throw new Exception("Error al eliminar el ensalada");
  		}

  		public function mostrarVegetalesTodo(){
  					$conexion = new Conexion();
  					$query = $conexion->crearConexion()->query("SELECT * FROM tbvegetales");

  					$devolver[] = array();

  					if($query!=null){
  						while($resultado = $query->fetch_assoc()){
  							$devolver[]=$resultado;
  						}
  					}

  					$conexion->cerrarConexion();

  					return $devolver;
  		}

  		public function modificarVegetal($vegetal){
  					$conexion = new Conexion();
  					$vegetalId= $vegetal->getVegetalId();
  	        $vegetalDescripcion= $vegetal->getVegetalDescripcion();
  	        $vegetalNombre= $vegetal->getVegetalNombre();
						$vegetalMedida= $vegetal->getVegetalMedida();

  	       	$modificar = $this->$conexion->crearConexion()->query("UPDATE tbvegetales SET vegetaldescripcion='$vegetalDescripcion',
              vegetalnombre='$vegetalNombre', vegetalmedida='$vegetalMedida' WHERE vegetalid='$vegetalId';");

  	        if($modificar != 1)
  	          	throw new Exception("Error al modificar el vegetal");
  		}

  		public function insertarSector($vegetal){
  				  $conexion = new Conexion();
						$vegetalDescripcion= $vegetal->getVegetalDescripcion();
						$vegetalNombre= $vegetal->getVegetalNombre();
						$vegetalMedida= $vegetal->getVegetalMedida();

  	       	$consulta = "INSERT INTO tbvegetales (vegetaldescripcion, vegetalnombre, vegetalmedida)
            VALUES ('$vegetalDescripcion', '$vegetalNombre', '$vegetalMedida')";

  					if(!$conexion->crearConexion()->query($consulta)){
                echo "Error al Registrar";
  					}else{
                echo "Registro exitoso!!!";
  					}
  					$conexion->cerrarConexion();
  		}
    }
?>
