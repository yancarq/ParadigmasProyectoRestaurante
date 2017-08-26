<?php
	class Empleado{
		private $empleadoId;
		private $empleadocontrasenia;
		private $empleadoNombre;
		
		function Empleado($empleadoId,$empleadocontrasenia,$empleadoNombre){
			$this->empleadoId=$empleadoId;
			$this->empleadocontrasenia=$empleadocontrasenial;
			$this->empleadoNombre=$empleadoNombre;
		}
		function setEmpleadoId($id)
		{
			$this->empleadoId=$id;	
			
		}
		function getEmpleadoId(){
			return $this->empleadoId;	
		}
		
		function setEmpleadoContrasenia($contrasenia){
			$this->empleadocontrasenia=$contrasenia;
		}
		function getEmpleadoContrasenia(){
			return $this->empleadocontrasenia;	
		}
		
		function setEmpleadoNombre($nombre){
			$this->empleadoNombre=$nombre;	
		}
		function getEmpleadoNombre(){
			$this->empleadoNombre;	
		}

		
	}


?>