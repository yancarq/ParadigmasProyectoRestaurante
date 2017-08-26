<?php
	class Empleado{
		private $empleadoUsuario;
		private $empleadocontrasenia;
		private $empleadoNombre;
		
		function Empleado($empleadoUsuario,$empleadocontrasenia,$empleadoNombre){
			$this->empleadoUsuario=$empleadoUsuario;
			$this->empleadocontrasenia=$empleadocontrasenial;
			$this->empleadoNombre=$empleadoNombre;
		}
		function setEmpleadoUSuario($usuario)
		{
			$this->empleadoUsuario=$usuario;	
			
		}
		function getEmpleadoUsuario(){
			return $this->empleadoNombre;	
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
		
	}


?>