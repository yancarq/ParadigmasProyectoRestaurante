<?php
	
	include '../domain/carne.php';

  class DataCarnes {

  	   public function eliminarCarnes($carneId){
		   include 'conexion.php';
  		   $conexion = new Conexion();
  		   $eliminar = $this->$conexion->crearConexion()->query("DELETE FROM tbcarnes WHERE carneid='$carneId';");

  	        if($eliminar != 1)
  	          	throw new Exception("Error al eliminar el carne");
  		}

  		public function mostrarCarneTodo(){
  					/*$conexion = new Conexion();
  					$query = $conexion->crearConexion()->query("SELECT * FROM tbcarnes");

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
			$query="SELECT * FROM tbcarnes where carneid  ORDER BY carneid ASC;";
			$resultado = mysqli_query($conexion->crearConexion(), $query);
			while($datos=mysqli_fetch_array($resultado)){
				echo "<tr>
					<td>".$datos["carnedescripcion"]."</td>
					<td>".$datos["carnenombre"]."</td>							
					<td>".$datos["carnemedida"]."</td>
					<td><a href='' class='glyphicon glyphicon-edit'></a> 
					<a href='' class='glyphicon glyphicon-remove-circle'></a></td>
				</tr>";
			}
			$conexion->cerrarConexion();
  		}

  		public function modificarCarne($carne){
  					$conexion = new Conexion();
  					$carneId= $carne->getCarnelId();
  	        $carneDescripcion= $carne->getCarneDescripcion();
  	        $carneNombre= $carne->getCarneNombre();
						$carneMedida= $carne->getCarneUnidadMedicion();

  	       	$modificar = $this->$conexion->crearConexion()->query("UPDATE tbcarnes SET carnedescripcion ='$carneDescripcion',
              carnenombre='$carneNombre', carnemedida='$carneMedida' WHERE carneid='$carneId';");

  	        if($modificar != 1)
  	          	throw new Exception("Error al modificar el carne");
  		}

  		public function insertarCarne($carne){
			include "conexion.php";
			$valEstado;
  			$conexion = new Conexion();
			$carneDescripcion= $carne->getCarneDescripcion();
  	        $carneNombre= $carne->getCarneNombre();
			$carneMedida= $carne->getCarneUnidadMedicion();

  	       	$consulta = "INSERT INTO tbcarnes (carnedescripcion, carnenombre, carnemedida)
            VALUES ('$carneDescripcion', '$carneNombre', '$carneMedida')";

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
