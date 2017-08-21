<?php
	include "Conexion.php";
	include "../domain/Empleados.php";

  class dataEmpleado {

  	   public function eliminarEmpleado($empleadoId){
  					$conexion = new Conexion();
  					$eliminar = $this->$conexion->crearConexion()->query("DELETE FROM tbempleado WHERE empleadoid='$empleadoId';");

  	        if($eliminar != 1)
  	          	throw new Exception("Error al eliminar el empleado");
  		}

  		public function mostrarEmpleadoTodo(){
  					$conexion = new Conexion();
  					$query = $conexion->crearConexion()->query("SELECT * FROM tbempleado");

  					$devolver[] = array();

  					if($query!=null){
  						while($resultado = $query->fetch_assoc()){
  							$devolver[]=$resultado;
  						}
  					}

  					$conexion->cerrarConexion();

  					return $devolver;
  		}

  		public function modificarEmpleado($empleado){
  					$conexion = new Conexion();
  					$empleadoId= $empleado->getEmpleadoId();
  	        $empleadoNombre= $empleado->getEmpleadoNombre();
  	        $empleadoContrasenia= $empleado->getEmpleadoContrasenia();

  	       	$modificar = $this->$conexion->crearConexion()->query("UPDATE tbempleado SET empleadonombre='$empleadoNombre',
              empleadocontrasenia='$empleadoContrasenia' WHERE empleadoid='$empleadoId';");

  	        if($modificar != 1)
  	          	throw new Exception("Error al modificar el empleado");
  		}

  		public function insertarEmpleado($empleado){
  				  $conexion = new Conexion();
            $empleadoId= $empleado->getEmpleadoId();
            $empleadoNombre= $empleado->getEmpleadoNombre();
            $empleadoContrasenia= $empleado->getEmpleadoContrasenia();

  	       	$consulta = "INSERT INTO tbempleado (empleadoid, empleadocontrasenia, empleadonombre)
            VALUES ('$empleadoId', '$empleadoContrasenia', '$empleadoNombre')";

  					if(!$conexion->crearConexion()->query($consulta)){
                echo "Error al Registrar";
  					}else{
                echo "Registro exitoso!!!";
  					}
  					$conexion->cerrarConexion();
  		}
    }
?>
