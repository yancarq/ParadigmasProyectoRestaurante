<?php
	
	include "../domain/especia.php";

  class DataEspecias {

  	   public function eliminarEspecia($especiaId){
		   include "conexion.php";
  		   $conexion = new Conexion();
  		   $eliminar = $this->$conexion->crearConexion()->query("DELETE FROM tbespecias WHERE especiaid='$especiaId';");

  	        if($eliminar != 1)
  	          	throw new Exception("Error al eliminar el especia");
  		}

  		public function mostrarEspeciaTodo(){
			//include "conexion.php";
			/*$conexion = new Conexion();
			$query = $conexion->crearConexion()->query("SELECT * FROM tbespecias");

			$devolver[] = array();

			if($query!=null){
				while($resultado = $query->fetch_assoc()){
					$devolver[]=$resultado;
				}
			}

			$conexion->cerrarConexion();

			return $devolver;*/
			$conexion= new Conexion();
			$conexion->crearConexion();
			$query="SELECT * FROM tbespecias where especiaid  ORDER BY especiaid ASC;";
			$resultado = mysqli_query($conexion->crearConexion(), $query);
			while($datos=mysqli_fetch_array($resultado)){
				echo "<tr>
					<td>".$datos["especiadescripcion"]."</td>
					<td>".$datos["especianombre"]."</td>							
					<td>".$datos["especiamedida"]."</td>
					<td><a href='' class='glyphicon glyphicon-edit'></a> 
					<a href='' class='glyphicon glyphicon-remove-circle'></a></td>
				</tr>";
			}
			$conexion->cerrarConexion();
  		}

  		public function modificarEspecia($especia){
			$conexion = new Conexion();
			$especiaId= $especia->getEspeciaId();
  	        $especiaDescripcion= $especia->getEspeciaDescripcion();
  	        $especiaNombre= $especia->getEspeciaNombre();
			$especiaMedida= $especia->getEspecieUnidadMedicion();

  	       	$modificar = $this->$conexion->crearConexion()->query("UPDATE tbespecias SET especiadescripcion ='$especiaDescripcion',
              especianombre='$especiaNombre', especiamedida='$especiaMedida' WHERE especiaid='$especiaId';");

  	        if($modificar != 1)
  	          	throw new Exception("Error al modificar el especia");
  		}

  		public function insertarEspecia($especia){
			include "conexion.php";
			$valEstado;
  			$conexion = new Conexion();
			$especiaDescripcion= $especia->getEspeciaDescripcion();
  	        $especiaNombre= $especia->getEspeciaNombre();
			$especiaMedida= $especia->getEspeciaUnidadMedicion();

  	       	$consulta = "INSERT INTO tbespecias (especiadescripcion, especianombre, especiamedida)
            VALUES ('$especiaDescripcion', '$especiaNombre', '$especiaMedida')";

			if(!$conexion->crearConexion()->query($consulta)){
				$valEstado="error";
			}else{
				$valEstado="ok";
			}
			$conexion->cerrarConexion();
  		}
    }
?>
