<?php
	class Especia{
		private $especiaNombre;
		private $especiaDescripcion;
		private $especiaUnidadMedicion;
		
		
		function Especia($especiaNombre,$especiaDescripcion,$especiaUnidadMedicion){
			$this->especiaNombre=$especiaNombre;
			$this->especiaDescripcion=$especiaDescripcion;
			$this->especiaUnidadMedicion=$especiaUnidadMedicion;
				
		}
		function setEspeciaNombre($nombre){
			$this->especiaNombre=$nombre;	
		}
		function getEspeciaNombre(){
			return $this->especiaNombre;	
		}
		
		function setEspeciaDescripcion($descripcion){
			$this->especiaDescripcion=$descripcion;	
		}
		function getEspeciaDescripcion(){
			return $this->especiaDescripcion;	
		}
		
		function setEspeciaUnidadMedicion($unidadMedicion){
			$this->especiaUnidadMedicion=$unidadMedicion;	
		}
		function getEspeciaUnidadMedicion(){
			return $this->especiaUnidadMedicion;	
		}
		
	}
	


?>