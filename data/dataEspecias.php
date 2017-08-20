<?php
	include "Conexion.php";
	include "../domain/Especias.php";

  class dataCarnes {

  	   public function eliminarEspecia($especiaId){
  					$conexion = new Conexion();
  					$eliminar = $this->$conexion->crearConexion()->query("DELETE FROM tbespecias WHERE especiaid='$especiaId';");

  	        if($eliminar != 1)
  	          	throw new Exception("Error al eliminar el especia");
  		}

  		public function mostrarEspeciaTodo(){
  					$conexion = new Conexion();
  					$query = $conexion->crearConexion()->query("SELECT * FROM tbespecias");

  					$devolver[] = array();

  					if($query!=null){
  						while($resultado = $query->fetch_assoc()){
  							$devolver[]=$resultado;
  						}
  					}

  					$conexion->cerrarConexion();

  					return $devolver;
  		}

  		public function modificarEspecias($especia){
  					$conexion = new Conexion();
  					$especiaId= $especia->getEspeciaId();
  	        $especiaDescripcion= $especia->getEspeciaDescripcion();
  	        $especiaNombre= $especia->getEspeciaNombre();
						$especiaMedida= $especia->getEspeciaMedida();

  	       	$modificar = $this->$conexion->crearConexion()->query("UPDATE tbespecias SET especiadescripcion ='$especiaDescripcion',
              especianombre='$especiaNombre', especiamedida='$especiaMedida' WHERE especiaid='$especiaId';");

  	        if($modificar != 1)
  	          	throw new Exception("Error al modificar el especia");
  		}

  		public function insertarEspecias($ensalada){
  				  $conexion = new Conexion();
						$especiaDescripcion= $especia->getEspeciaDescripcion();
  	        $especiaNombre= $especia->getEspeciaNombre();
						$especiaMedida= $especia->getEspeciaMedida();

  	       	$consulta = "INSERT INTO tbespecias (especiadescripcion, especianombre, especiamedida)
            VALUES ('$especiaDescripcion', '$especiaNombre', '$especiaMedida')";

  					if(!$conexion->crearConexion()->query($consulta)){
                echo "Error al Registrar";
  					}else{
                echo "Registro exitoso!!!";
  					}
  					$conexion->cerrarConexion();
  		}
    }
?>
