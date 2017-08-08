
<?php

	include '../data/funcionesSector.php';
	
	class SectorBusiness {
	
		private $funcionesSector;
		
		public function SectorBusiness () {
		
			$this->funcionesSector = funcionesSector();
		
		}
		
		# Eliminar.
		public function eliminarSector ($sectorId) {
		
			$this->funcionesSector->eliminarSector($secorId);
		
		}
		
		# Mostrar.
		public function mostrarSector ($sectorId) {
		
			return $this->funcionesSector->mostrarSector($secorId);
		
		}
		
		# Modificar.
		public function modificarSector ($sector) {
		
			$this->funcionesSector->modificarSector($sector);
		
		}
		
		# Insertar.
		public function insertarSector ($sector) {
		
			return $this->funcionesSector->insertarSector($sector);
		
		}
	
	}

?>


























