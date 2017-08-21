<?php
	class Especies{
		private $especiesNombre;
		private $especiesDescripcion;
		private $especiesUnidadMedicion;
		
		
		function Especies($especiesNombre,$especiesDescripcion,$especiesUnidadMedicion){
			$this->especiesNombre=$especiesNombre;
			$this->especiesDescripcion=$especiesDescripcion;
			$this->especiesUnidadMedicion=$especiesUnidadMedicion;
				
		}
		function setEspeciesNombre($nombre){
			$this->especiesNombre=$nombre;	
		}
		function getEspeciesNombre(){
			return $this->especiesNombre;	
		}
		
		function setEspeciesDescripcion($descripcion){
			$this->especiesDescripcion=$descripcion;	
		}
		function getEspeciesDescripcion(){
			return $this->especiesDescripcion;	
		}
		
		function setEspeciesUnidadMedicion($unidadMedicion){
			$this->especiesUnidadMedicion=$unidadMedicion;	
		}
		function getEspeciesUnidadMedicion(){
			return $this->especiesUnidadMedicion;	
		}
		
	}
	


?>