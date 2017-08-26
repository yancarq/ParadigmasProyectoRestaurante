<?php
	class Enzaladas{
		private $enzaladasNombre;
		private $enzaladasDescripcion;
		private $enzaladasUnidadMedicion;
		
		
		function Enzaladas($enzaladasNombre,$enzaladasDescripcion,$enzaladasUnidadMedicion){
			$this->enzaladasNombre=$enzaladasNombre;
			$this->enzaladasDescripcion=$enzaladasDescripcion;
			$this->enzaladasUnidadMedicion=$enzaladasUnidadMedicion;
				
		}
		function setEnzaladasNombre($nombre){
			$this->enzaladasNombre=$nombre;	
		}
		function getEnzaladasNombre(){
			return $this->enzaladasNombre;	
		}
		
		function setEnzaladasDescripcion($descripcion){
			$this->enzaladasDescripcion=$descripcion;	
		}
		function getEnzaladasDescripcion(){
			return $this->enzaladasDescripcion;	
		}
		
		function setEnzaladasUnidadMedicion($unidadMedicion){
			$this->enzaladasUnidadMedicion=$unidadMedicion;	
		}
		function getEnzaladasUnidadMedicion(){
			return $this->enzaladasUnidadMedicion;	
		}
		
	}
	


?>