<?php
	
	include '../data/dataVegetales.php';
	include '../data/dataCarnes.php';
	include '../data/dataEnsalada.php';
	include '../data/dataEspecias.php';
	

	class IngredientesBusiness {

		private $dataCarne;
		private $dataEnsalada;
		private $dataEspecia;
		private $dataVegetal;
		

		public function IngredientesBusiness() {

			$this->dataCarne =new DataCarnes();
			$this->dataEnsalada =new DataEnsalada();
			$this->dataEspecia =new DataEspecias();
			$this->dataVegetal =new DataVegetales();

		}
		
			//CRUD Vegetales
		public function insertVegetal($vegetal) {
			$this->dataVegetal->insertarVegetal($vegetal);
		}
	
		public function updateVegetal($vegetal) {
			$this->dataVegetal->modificarVegetal($vegetal);
		}
	
		public function deleteVegetal($vegetalId) {
			$this->dataVegetal->eliminarVegetal($vegetalId);
		}
	
		public function getAllVegetales() {
			$this->dataVegetal->mostrarVegetalesTodo();
		}	
			
			
		
			//CRUD CARNES
		public function insertCarne($carne) {
			$this->dataCarne->insertarCarne($carne);
		}
	
		public function updateCarne($carne) {
			$this->dataCarne->modificarCarne($carne);
		}
	
		public function deleteCarne($carneId) {
			$this->dataCarne->eliminarCarnes($carneId);
		}
	
		public function getAllCarne() {
			$this->dataCarne->mostrarCarneTodo();
		}
		
		
			//CRUD Especia
		public function insertEspecia($especia) {
			 $this->dataEspecia->insertarEspecia($especia);
		}
	
		public function updateEspecia($especia) {
			 $this->dataEspecia->modificarEspecia($especia);
		}
	
		public function deleteEspecia($especiaId) {
			 $this->dataEspecia->eliminarEspecia($especiaId);
		}
	
		public function getAllEspecia() {
			 $this->dataEspecia->mostrarEspeciaTodo();
		}	
		
		//CRUD Ensalada
		public function insertEnsalada($ensalada) {
			 $this->dataEnsalada->insertarEnsalada($ensalada);
		}
	
		public function updateEnsalada($ensalada) {
			 $this->dataEnsalada->modificarEnsalda($ensalada);
		}
	
		public function deleteEnsalada($ensaladalId) {
			 $this->dataEnsalada->eliminarEnsalda($ensaladaId);
		}
	
		public function getAllEnsalada() {
			 $this->dataEnsalada->mostrarEnsaladaTodo();
		}	

		
	}

?>
