<?php
	class Ensalada{
		private $ensaladaNombre;
		private $ensaladaDescripcion;
		private $ensaladaUnidadMedicion;
		
		
		function Ensalada($ensaladaNombre,$ensaladaDescripcion,$ensaladaUnidadMedicion){
			$this->ensaladaNombre=$ensaladaNombre;
			$this->ensaladaDescripcion=$ensaladaDescripcion;
			$this->ensaladaUnidadMedicion=$ensaladaUnidadMedicion;
				
		}
		function setEnsaladaNombre($nombre){
			$this->ensaladaNombre=$nombre;	
		}
		function getEnsaladaNombre(){
			return $this->ensaladaNombre;	
		}
		
		function setEnsaladaDescripcion($descripcion){
			$this->ensaladaDescripcion=$descripcion;	
		}
		function getEnsaladaDescripcion(){
			return $this->ensaladaDescripcion;	
		}
		
		function setEnsaladaUnidadMedicion($unidadMedicion){
			$this->ensaladaUnidadMedicion=$unidadMedicion;	
		}
		function getEnsaladaUnidadMedicion(){
			return $this->ensaladaUnidadMedicion;	
		}
		
	}
	


?>