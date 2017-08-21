<?php
	class Carnes{
		private $carnesNombre;
		private $carnesDescripcion;
		private $carnesUnidadMedicion;
		
		
		function Carnes($carnesNombre,$carnesDescripcion,$carnesUnidadMedicion){
			$this->carnesNombre=$carnesNombre;
			$this->carnesDescripcion=$carnesDescripcion;
			$this->carnesUnidadMedicion=$carnesUnidadMedicion;
				
		}
		function setCarnesNombre($nombre){
			$this->carnesNombre=$nombre;	
		}
		function getCarnesNombre(){
			return $this->carnesNombre;	
		}
		
		function setCarnesDescripcion($descripcion){
			$this->carnesDescripcion=$descripcion;	
		}
		function getCarnesDescripcion(){
			return $this->carnesDescripcion;	
		}
		
		function setCarnesUnidadMedicion($unidadMedicion){
			$this->carnesUnidadMedicion=$unidadMedicion;	
		}
		function getCarnesUnidadMedicion(){
			return $this->carnesUnidadMedicion;	
		}
		
	}
	


?>