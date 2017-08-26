<?php
	
	include "../domain/ensalada.php";
	
  class DataEnsalada {

  	   public function eliminarEnsalda($ensaladaId){
		  include "conexion.php";
		  $conexion = new Conexion();
		  $eliminar = $this->$conexion->crearConexion()->query("DELETE FROM tbensaladas WHERE ensaladaid='$ensaladaId';");

  	      if($eliminar != 1)
  	          throw new Exception("Error al eliminar el ensalada");
  		}

  		public function mostrarEnsaladaTodo(){
			
			/*$conexion = new Conexion();
			$query = $conexion->crearConexion()->query("SELECT * FROM tbensaladas");

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
			$query="SELECT * FROM tbensaladas where ensaladaid  ORDER BY ensaladaid ASC;";
			$resultado = mysqli_query($conexion->crearConexion(), $query);
			while($datos=mysqli_fetch_array($resultado)){
				echo "<tr>
					<td>".$datos["ensaladadescripcion"]."</td>
					<td>".$datos["ensaladanombre"]."</td>							
					<td>".$datos["ensaladamedida"]."</td>
					<td><a href='' class='glyphicon glyphicon-edit'></a> 
					<a href='' class='glyphicon glyphicon-remove-circle'></a></td>
				</tr>";
			}
			$conexion->cerrarConexion();
  		}

  		public function modificarEnsalda($ensalada){
			include "conexion.php";
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
			include "conexion.php";
			$valEstado;
  			$conexion = new Conexion();
			$ensaladaDescripcion= $ensalada->getEnsaladaDescripcion();
			$ensaladaNombre= $ensalada->getEnsaladaNombre();
			$ensaladaMedida= $ensalada->getEnsaladaUnidadMedicion();

  	       	$consulta = "INSERT INTO tbensaladas (ensaladadescripcion, ensaladanombre, ensaladamedida)
            VALUES ('$ensaladaDescripcion', '$ensaladaNombre', '$ensaladaMedida')";

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