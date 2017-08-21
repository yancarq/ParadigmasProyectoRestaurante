<!DOCTYPE html>
<html>
    <head>
   	 <title>CURD Ingredientes</title>
     <meta charset="utf-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
 	 <link rel="stylesheet" href="./Recursos/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	 <script src="../Recursos/js/jquery.min.js"></script>
  	 <script src="../Recursos/js/bootstrap.min.js"></script>
     <script src="../Recursos/js/ingredientes.js"></script>
     <style>
     	.form-control{
			width:300px;
			/*left:150px;*/
			position: relative;
		}
     </style>
    </head>
    <body>
    	
       <div class="container">
		<h1 align="center">Ingredientes</h1>

              <div class="head">
                <h4>Configuracion de Ingredientes</h4><br/>
                 <!-- <div id="buscar_usuario" class="input-group col-xs-3" >
                      <input class="form-control" type="text" id="busquedaUsuario" align="right" name="busquedaUsuario" placeholder="usuario">
                    	<span class="input-group-btn">
                    	<button id="boton-buscar-usuario" class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>Buscar
                      </button>
                      </span>
              	 </div>-->
               <br />
               </div>
               <div class="row">
   				 <div class="col-sm-6">
               	  <div id="opciones-usuarios">
                   <div class="btn-group">
                        <h4>Configuracion de Vegetales</h4>
                        <button id="agregarVegetales" type="button" name="agregarVegetales"  class="btn btn-primary" onClick="ModalVista('vegetales')">Agregar</button>
                        <button id="modificarVegetales" type="button" name="button" class="btn btn-default">Modificar</button>
                        <button id="eliminarVegetales" type="button" name="button" class="btn btn-warning">Eliminar</button>
                        <button id="mostrarVegetales" type="submit" name="button" class="btn btn-success">Registro Vegetales</button>

                  </div>
                  <br/>
                  <div class="btn-group">
                        <h4>Configuracion de Carnes</h4>
                        <button id="agregarCarnes" type="button" name="button"  class="btn btn-primary">Agregar</button>
                        <button id="modificarCarnes" type="button" name="button" class="btn btn-default">Modificar</button>
                        <button id="eliminarCarnes" type="button" name="button" class="btn btn-warning">Eliminar</button>
                        <button id="mostrarCarnes" type="submit" name="button" class="btn btn-success">Registro Carnes</button>
                        <button id="cancelarCarnes" type="reset" name="button" class="btn btn-danger">Cancelar</button>
                  </div>
                  <br/>
                 </div>
                 </div>
                 <div class="row">
                 	<div class="col-sm-6">
                      <div class="btn-group">
                            <h4>Configuracion de Ensaladas</h4>
                            <button id="agregarEnsaladas" type="button" name="button"  class="btn btn-primary">Agregar</button>
                            <button id="modificarEnsaladas" type="button" name="button" class="btn btn-default">Modificar</button>
                            <button id="eliminarEnsaladas" type="button" name="button" class="btn btn-warning">Eliminar</button>
                            <button id="mostrarEnsaladas" type="submit" name="button" class="btn btn-success">Registro Ensaladas</button>
                            <button id="cancelarEnsaladas" type="reset" name="button" class="btn btn-danger">Cancelar</button>
                      </div>
                      <br>
                      <div class="btn-group">
                            <h4>Configuracion de Especies</h4>
                            <button id="agregarEspecies" type="button" name="button"  class="btn btn-primary">Agregar</button>
                            <button id="modificarEspecies" type="button" name="button" class="btn btn-default">Modificar</button>
                            <button id="eliminarEspecies" type="button" name="button" class="btn btn-warning">Eliminar</button>
                            <button id="mostrarEspecies" type="submit" name="button" class="btn btn-success">Registro Especies</button>
                            <button id="cancelarEspecies" type="reset" name="button" class="btn btn-danger">Cancelar</button>
                      </div>
                 	</div>
                 </div>
             
              <br/>
          
              <div class="body" hidden="true">
                <div id="div-tabla-universal" class="table-responsive">
                    <table class="table table-striped table-condensed table-hover">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Descripcion</th>
                          <th>Unidad Medicion</th>
                          <th>Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php /*
                      include "../Data/funcionesUsuario.php";
                      $consulta= new funcionesUsuario();
                      $consulta->GetUsuarios();
                        */?>
                      </tbody>
                    </table>
        
                </div>
              </div>
             
                          <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" id="titulo"></h4>
                    </div>
                    <div class="modal-body">
                      	<form  class="form-horizontal" action="d.php" role="form">
                        	<div class="form-group">
                       			<label class="control-label col-sm-2"  id="lblnombre" for="nombre">Nombre</label>
                                <div class="col-sm-7">
                                	<input class="form-control" type="text" id="nombre" required>
                                </div>
                            </div>
                            <div class="form-group">
                       			<label class="control-label col-sm-2" id="lbldescripcion" for="descripcion">Descripcion</label>
                                <div class="col-sm-7">
                                	<input class="form-control" type="text" id="descripcion" required>
                            	</div>
                            </div>
                            <div class="form-group">
                       			<label class="control-label col-sm-2" id="lblunidadmedicion" for="unidadmedicion">Unidad Medicion</label>
                                <div class="col-sm-7">
                                	<input class="form-control" type="text" id="unidadmedicion" required">
                            	</div>
                            </div>
                            
                        </form>
                        
                    </div>
                    <div class="modal-footer">
                   	  <button type="submit" class="btn btn-default"  >Aceptar</button>
                      <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
                  
                </div>
              </div>
         
        </div>
        
    </body>
</html>