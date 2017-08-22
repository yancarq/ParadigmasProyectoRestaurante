<?php
	class Carne{
		private $carneNombre;
		private $carneDescripcion;
		private $carneUnidadMedicion;
		
		
		function Carne($carneNombre,$carneDescripcion,$carneUnidadMedicion){
			$this->carneNombre=$carneNombre;
			$this->carneDescripcion=$carneDescripcion;
			$this->carneUnidadMedicion=$carneUnidadMedicion;
				
		}
		function setCarneNombre($nombre){
			$this->carneNombre=$nombre;	
		}
		function getCarneNombre(){
			return $this->carneNombre;	
		}
		
		function setCarneDescripcion($descripcion){
			$this->carneDescripcion=$descripcion;	
		}
		function getCarneDescripcion(){
			return $this->carneDescripcion;	
		}
		
		function setCarneUnidadMedicion($unidadMedicion){
			$this->carneUnidadMedicion=$unidadMedicion;	
		}
		function getCarneUnidadMedicion(){
			return $this->carneUnidadMedicion;	
		}
		
	}
	


?>