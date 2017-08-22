// JavaScript Document

function ModalVista(elemento){
	$('#formIngredientes')[0].reset();
	switch(elemento){
		
		case "vegetales":{
			$("#titulo").html("Ingresar un nuevo ingrediente de vegetal");
			$("#tipoIngrediente").hide();
			$("#tipoIngrediente").val("vegetal");
			$("#myModal").modal();
			
			break;
		}
		case "carnes":{
			$("#titulo").html("Ingresar un nuevo ingrediente de carne");
			$("#tipoIngrediente").hide();
			$("#tipoIngrediente").val("carne");
			$("#myModal").modal();
			break;
		}
		case "ensaladas":{
			$("#titulo").html("Ingresar un nuevo ingrediente de ensalada");
			$("#tipoIngrediente").hide();
			$("#tipoIngrediente").val("ensalada");
			$("#myModal").modal();
			break;
		}
		case "especias":{
			$("#titulo").html("Ingresar un nuevo ingrediente de especia");
			$("#tipoIngrediente").hide();
			$("#tipoIngrediente").val("especia");
			$("#myModal").modal();
			break;
		}
		
	}
}

$(document).ready(function() {
	document.getElementById("div-tabla-vegetales").style.display= "none";
	document.getElementById("div-tabla-carnes").style.display = "none";
	document.getElementById("div-tabla-ensaladas").style.display ="none"
	document.getElementById("div-tabla-especias").style.display ="none";
	
});
function mostrarTabla(seleccion){
	  switch(seleccion){
		
			case "vegetales":{
				document.getElementById("div-tabla-vegetales").style.display="block";
				document.getElementById("div-tabla-carnes").style.display = "none"
				document.getElementById("div-tabla-ensaladas").style.display ="none"
				document.getElementById("div-tabla-especias").style.display ="none";
				break;
			}
			case "carnes":{
				document.getElementById("div-tabla-carnes").style.display="block";
				document.getElementById("div-tabla-vegetales").style.display= "none";
				document.getElementById("div-tabla-ensaladas").style.display ="none"
				document.getElementById("div-tabla-especias").style.display ="none";
								
				break;
			}
			case "ensaladas":{
				document.getElementById("div-tabla-ensaladas").style.display="block";
				document.getElementById("div-tabla-vegetales").style.display= "none";
				document.getElementById("div-tabla-carnes").style.display = "none";
				document.getElementById("div-tabla-especias").style.display ="none";		
				break;
			}
			case "especias":{
				document.getElementById("div-tabla-especias").style.display="block";	
				document.getElementById("div-tabla-vegetales").style.display= "none";
				document.getElementById("div-tabla-carnes").style.display = "none";
				document.getElementById("div-tabla-ensaladas").style.display ="none";				
				break;
			}
		}
}

function ingresarIngrediente(){
	
	var nombre= $("#ingredienteNombre").val();
	var descripcion= $("#ingredienteDescripcion").val();
	var unidadMedida=$("#ingredienteMedicionUnidad").val();
	var tipoIngrediente=$("#tipoIngrediente").val();
	
	
	if(nombre.trim()==''){
		alert('Ingrese el nombre del Ingrediente');
        $('#nombre').focus();
        return false;
	}else if(descripcion.trim()==''){
		alert("Ingrese la descripcion del Ingrediente");
        $('#descripcion').focus();
        return false;
	}else if(unidadMedida==0){
		alert('Ingrese la unidad de medida del Ingrediente');
        $('#unidadMedida').focus();
        return false;
	}else{
		$.ajax({
			type:"POST",
			url:"../business/ingredientesActionPost.php",
			data:"ingredientesForm=1&ingredienteNombre="+nombre+"&ingredienteDescripcion="+descripcion+"&ingredienteMedicionUnidad="+unidadMedida+"&tipoIngrediente="+tipoIngrediente,
			success:function(msg){
				if(msg=="ok"){
					alert("Registro Exitoso"+msg);
					$("#myModal").modal('hide');
				}else{
					alert("Error al Ingresar Producto "+msg);
					$("#myModal").modal('hide');
				}			
	}	
			
		});	
		
		
		
	}
	
	
}
