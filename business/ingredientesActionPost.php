<?php

include 'ingredientesBusiness.php';

if (isset($_POST['ingredientesForm'])&& !empty($_POST['ingredienteNombre'])&&!empty($_POST['ingredienteDescripcion'])&&!empty($_POST['ingredienteMedicionUnidad'])&&!empty($_POST['tipoIngrediente'])) {
		$valestado;
		$nombre = $_POST['ingredienteNombre'];
		$descripcion = $_POST['ingredienteDescripcion'];
		$unidadMedicion = $_POST['ingredienteMedicionUnidad'];
		$tipoIngrediente = $_POST['tipoIngrediente'];
		
		$ingredienteBusiness = new IngredientesBusiness();
		if($tipoIngrediente=="vegetal"){
			$vegetal= new Vegetal($nombre,$descripcion,$unidadMedicion);
			$ingredienteBusiness->insertVegetal($vegetal);
		}
		else if($tipoIngrediente=="carne"){
			$carne= new Carne($nombre,$descripcion,$unidadMedicion);
			$ingredienteBusiness->insertCarne($carne);
		}
		else if($tipoIngrediente=="ensalada"){
			$ensalada= new Ensalada($nombre,$descripcion,$unidadMedicion);
			$ingredienteBusiness->insertEnsalada($ensalada);
		}
		else if($tipoIngrediente=="especia"){
			$especia= new Especia($nombre,$descripcion,$unidadMedicion);
			$ingredienteBusiness->insertEspecia($especia);
		}else{
			echo "error";die;
		}
	echo "ok";die;

} else { # Operacion no soportada.
	echo "error";die;

}
?>