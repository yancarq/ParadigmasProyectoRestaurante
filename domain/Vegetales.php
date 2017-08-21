<?php
	class Vegetales{
		private $vegetalesNombre;
		private $vegetalesDescripcion;
		private $vegetalesUnidadMedicion;
		
		
		function Vegetales($vegetalesNombre,$vegetalesDescripcion,$vegetalesUnidadMedicion){
			$this->vegetalesNombre=$vegetalesNombre;
			$this->vegetalesDescripcion=$vegetalesDescripcion;
			$this->vegetalesUnidadMedicion=$vegetalesUnidadMedicion;
				
		}
		function setVegetalesNombre($nombre){
			$this->vegetalesNombre=$nombre;	
		}
		function getVegetalesNombre(){
			return $this->vegetalesNombre;	
		}
		
		function setVegetalesDescripcion($descripcion){
			$this->vegetalesDescripcion=$descripcion;	
		}
		function getVegetalesDescripcion(){
			return $this->vegetalesDescripcion;	
		}
		
		function setVegetalesUnidadMedicion($unidadMedicion){
			$this->vegetalesUnidadMedicion=$unidadMedicion;	
		}
		function getVegetalesUnidadMedicion(){
			return $this->vegetalesUnidadMedicion;	
		}
		
	}
	


?>