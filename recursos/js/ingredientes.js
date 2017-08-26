// JavaScript Document

function ModalVista(elemento){
	
	switch(elemento){
		
		case "vegetales":{
			$("#titulo").html("Ingrese un nuevo Vegetal");
			$("#myModal").modal();
			
			break;
		}
		case "carnes":{
			alert("carnes");
			$("#titulo").html("Ingrese un nuevo Carne");
			$("#myModal").modal();
			break;
		}
		case "ensaladas":{
			alert("ensaladas");
			$("#titulo").html("Ingrese un nuevo Ensalada");
			$("#myModal").modal();
			break;
		}
		case "especies":{
			alert("especies");
			$("#titulo").html("Ingrese un nuevo Especie");
			$("#myModal").modal();
			break;
		}
		
	}
}