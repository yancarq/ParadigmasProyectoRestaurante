<?php
	include "Conexion.php";
	include "../domain/Ensaldas.php";

  class dataEnsalada {

  	   public function eliminarEnsalda($ensaladaId){
  					$conexion = new Conexion();
  					$eliminar = $this->$conexion->crearConexion()->query("DELETE FROM tbensaladas WHERE ensaladaid='$ensaladaId';");

  	        if($eliminar != 1)
  	          	throw new Exception("Error al eliminar el ensalada");
  		}

  		public function mostrarEnsaladaTodo(){
  					$conexion = new Conexion();
  					$query = $conexion->crearConexion()->query("SELECT * FROM tbensaladas");

  					$devolver[] = array();

  					if($query!=null){
  						while($resultado = $query->fetch_assoc()){
  							$devolver[]=$resultado;
  						}
  					}

  					$conexion->cerrarConexion();

  					return $devolver;
  		}

  		public function modificarEnsalda($ensalada){
  					$conexion = new Conexion();
  					$ensaladaId= $ensalada->getEnsaladaId();
  	        $ensaladaDescripcion= $ensalada->getEnsaladaDescripcion();
  	        $ensaladaNombre= $ensalada->getEnsaladaNombre();
						$ensaladaMedida= $ensalada->getEnsaladaMedida();

  	       	$modificar = $this->$conexion->crearConexion()->query("UPDATE tbensaladas SET ensaladadescripcion='$ensaladaDescripcion',
              ensaladanombre='$ensaladaNombre', ensaladamedida='$ensaladaMedida' WHERE ensaladalid='$ensaladaId';");

  	        if($modificar != 1)
  	          	throw new Exception("Error al modificar el ensalada");
  		}

  		public function insertarEnsalada($ensalada){
  				  $conexion = new Conexion();
						$ensaladaDescripcion= $ensalada->getEnsaladaDescripcion();
						$ensaladaNombre= $ensalada->getEnsaladaNombre();
						$ensaladaMedida= $ensalada->getEnsaladaMedida();

  	       	$consulta = "INSERT INTO tbensaladas (ensaladadescripcion, ensaladanombre, ensaladamedida)
            VALUES ('$ensaladaDescripcion', '$ensaladaNombre', '$ensaladaMedida')";

  					if(!$conexion->crearConexion()->query($consulta)){
                echo "Error al Registrar";
  					}else{
                echo "Registro exitoso!!!";
  					}
  					$conexion->cerrarConexion();
  		}
    }
?>
