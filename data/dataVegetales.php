<?php
	
	include "../domain/vegetal.php";

  class DataVegetales {

  	   public function eliminarVegetal($vegetalId){
		   	include "conexion.php";
  			$conexion = new Conexion();
  			$eliminar = $this->$conexion->crearConexion()->query("DELETE FROM tbvegetales WHERE vegetalid='$vegetalId';");

  	        if($eliminar != 1)
  	          	throw new Exception("Error al eliminar el ensalada");
  		}

  		public function mostrarVegetalesTodo(){
			include "conexion.php";
			/*$conexion = new Conexion();
			$query = $conexion->crearConexion()->query("SELECT * FROM tbvegetales");

			$devolver[] = array();

			if($query!=null){
				while($resultado = $query->fetch_assoc()){
					$devolver[]=$resultado;
				}
			}

			$conexion->cerrarConexion();*/
			$conexion= new Conexion();
			$conexion->crearConexion();
			$query="SELECT * FROM tbvegetales where vegetalid  ORDER BY vegetalid ASC;";
			$resultado = mysqli_query($conexion->crearConexion(), $query);
			while($datos=mysqli_fetch_array($resultado)){
				echo "<tr>
					<td>".$datos["vegetaldescripcion"]."</td>
					<td>".$datos["vegetalnombre"]."</td>							
					<td>".$datos["vegetalmedida"]."</td>
					<td><a href='' class='glyphicon glyphicon-edit'></a> 
					<a href='' class='glyphicon glyphicon-remove-circle'></a></td>
				</tr>";
			}
			$conexion->cerrarConexion();
			//return $devolver;
  		}

  		public function modificarVegetal($vegetal){
  			$conexion = new Conexion();
  			$vegetalId= $vegetal->getVegetalId();
  	        $vegetalDescripcion= $vegetal->getVegetalDescripcion();
  	        $vegetalNombre= $vegetal->getVegetalNombre();
			$vegetalMedida= $vegetal->getVegetalUnidadMedicion();

  	       	$modificar = $this->$conexion->crearConexion()->query("UPDATE tbvegetales SET vegetaldescripcion='$vegetalDescripcion',
              vegetalnombre='$vegetalNombre', vegetalmedida='$vegetalMedida' WHERE vegetalid='$vegetalId';");

  	        if($modificar != 1)
  	          	throw new Exception("Error al modificar el vegetal");
  	}

  		public function insertarVegetal($vegetal){
			include "conexion.php";
			$valEstado;
			$conexion = new Conexion();
			$vegetalDescripcion= $vegetal->getVegetalDescripcion();
			$vegetalNombre= $vegetal->getVegetalNombre();
			$vegetalMedida= $vegetal->getVegetalUnidadMedicion();
  
			$consulta = "INSERT INTO tbvegetales (vegetaldescripcion, vegetalnombre, vegetalmedida)
			VALUES ('$vegetalDescripcion', '$vegetalNombre', '$vegetalMedida')";

			if(!$conexion->crearConexion()->query($consulta)){
				  $valEstado="error";
				  
			}else{
				  $valEstado="ok";
			}
			$conexion->cerrarConexion();
			return $valEstado;
  		}
    }
?>
