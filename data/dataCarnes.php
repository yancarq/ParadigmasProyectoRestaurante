<?php
	include "Conexion.php";
	include "../domain/Carnes.php";

  class dataCarnes {

  	   public function eliminarCarnes($carneId){
  					$conexion = new Conexion();
  					$eliminar = $this->$conexion->crearConexion()->query("DELETE FROM tbcarnes WHERE carneid='$carneId';");

  	        if($eliminar != 1)
  	          	throw new Exception("Error al eliminar el carne");
  		}

  		public function mostrarCarneTodo(){
  					$conexion = new Conexion();
  					$query = $conexion->crearConexion()->query("SELECT * FROM tbcarnes");

  					$devolver[] = array();

  					if($query!=null){
  						while($resultado = $query->fetch_assoc()){
  							$devolver[]=$resultado;
  						}
  					}

  					$conexion->cerrarConexion();

  					return $devolver;
  		}

  		public function modificarCarne($carne){
  					$conexion = new Conexion();
  					$carneId= $carne->getCarnelId();
  	        $carneDescripcion= $carne->getCarneDescripcion();
  	        $carneNombre= $carne->getCarneNombre();
						$carneMedida= $carne->getCarneMedida();

  	       	$modificar = $this->$conexion->crearConexion()->query("UPDATE tbcarnes SET carnedescripcion ='$carneDescripcion',
              carnenombre='$carneNombre', carnemedida='$carneMedida' WHERE carneid='$carneId';");

  	        if($modificar != 1)
  	          	throw new Exception("Error al modificar el carne");
  		}

  		public function insertarCarne($carne){
  				  $conexion = new Conexion();
						$carneDescripcion= $carne->getCarneDescripcion();
  	        $carneNombre= $carne->getCarneNombre();
						$carneMedida= $carne->getCarneMedida();

  	       	$consulta = "INSERT INTO tbcarnes (carnedescripcion, carnenombre, carnemedida)
            VALUES ('$carneDescripcion', '$carneNombre', '$carneMedida')";

  					if(!$conexion->crearConexion()->query($consulta)){
                echo "Error al Registrar";
  					}else{
                echo "Registro exitoso!!!";
  					}
  					$conexion->cerrarConexion();
  		}
    }
?>
