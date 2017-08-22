<?php
	class Vegetal{
		private $vegetalNombre;
		private $vegetalDescripcion;
		private $vegetalUnidadMedicion;
		
		
		function Vegetal($vegetalNombre,$vegetalDescripcion,$vegetalUnidadMedicion){
			$this->vegetalNombre=$vegetalNombre;
			$this->vegetalDescripcion=$vegetalDescripcion;
			$this->vegetalUnidadMedicion=$vegetalUnidadMedicion;
				
		}
		function setVegetalNombre($nombre){
			$this->vegetalNombre=$nombre;	
		}
		function getVegetalNombre(){
			return $this->vegetalNombre;	
		}
		
		function setVegetalDescripcion($descripcion){
			$this->vegetalDescripcion=$descripcion;	
		}
		function getVegetalDescripcion(){
			return $this->vegetalDescripcion;	
		}
		
		function setVegetalUnidadMedicion($unidadMedicion){
			$this->vegetalUnidadMedicion=$unidadMedicion;	
		}
		function getVegetalUnidadMedicion(){
			return $this->vegetalUnidadMedicion;	
		}
		
	}
	


?>