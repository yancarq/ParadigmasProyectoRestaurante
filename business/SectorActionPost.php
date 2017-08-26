<?php

include 'SectorBusiness.php';

if (isset($_POST['ingresar'])) { # Ingresar un nuevo sector.

	$tags_insertar = array('idSector', 'nombreSector', 'capacidadSector',
						'cantidadMesas', 'estadoSector');

	$todo_presente = true;

	# Se comprueba si todos los tags estan presentes.
	for ($x = 0; $x < count($tags_insertar); $x ++) {
		
		if ( !isset($_POST[$tags_insertar[$x]]) ) {
			
			$todo_presente = false;

		}

	}

	# No faltan tags.
	if ($todo_presente) {

		$sectorId = $_POST['idSector'];
		$sectorNombre = $_POST['nombreSector'];
		$sectorCapacidadPersonas = $_POST['capacidadSector'];
		$sectorCantidadMesas = $_POST['cantidadMesas'];
		$sectorEstado = $_POST['estadoSector'];

		# Campos sectorId y sectorNombre no vacios.
		if (strlen($sectorId) > 0 && strlen($sectorNombre) > 0) {

			# Campos sectorCapacidadPersonas y sectorCantidadMesas mayores a 0.
			if ($sectorCapacidadPersonas > 0 && $sectorCantidadMesas > 0) {

				# Nombre del sector no es numerico.
				if (!is_numeric($sectorNombre)) {

					$sector = new Sector($sectorId,$sectorNombre, $sectorCapacidadPersonas,
										$sectorCantidadMesas, $sectorEstado);

					$_sectorBusines = new SectorBusiness();

					# Query exitoso.
					$_sectorBusines->insertarSector($sector);
					/*if () {

						echo "Exito al ingresar sector";

					} else { # Query no exitoso.

						echo "Error al ingresar sector";

					}*/


				} else { # Nombre del sector es numerico

					echo "El nombre del sector debe ser texto";

				}

			} else { # Campos sectorCapacidadPersonas y sectorCantidadMesas >= 0.

				echo "Capacidad de peronas y cantidad de mesas deben ser mayores a 0";

			}

		} else { # Campos sectorId y sectorNombre vacios.

			echo "El ID y el nombre del sector no pueden estar vacios";

		}

	} else { # Faltan tags.

		echo "ERROR: Operacion invalida";

	}

} else { # Operacion no soportada.

	echo "ERROR: no soportada";

}

?>
