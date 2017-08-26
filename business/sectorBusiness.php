
<?php

	include "../data/funcionesSector.php";

	class SectorBusiness {

		private $_funcionesSector;

		public function SectorBusiness() {

			$this->_funcionesSector =new funcionesSector();

		}

		# Eliminar.
		public function eliminarSector ($sectorId) {

			$this->_funcionesSector->eliminarSector($secorId);

		}

		# Mostrar.
		public function mostrarSector ($sectorId) {

			return $this->_funcionesSector->mostrarSector($secorId);

		}

		# Modificar.
		public function modificarSector ($sector) {

			$this->_funcionesSector->modificarSector($sector);

		}

		# Insertar.
		public function insertarSector ($sector) {

			return $this->_funcionesSector->insertarSector($sector);

		}

	}

?>
