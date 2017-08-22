<!DOCTYPE html>
<html>
    <head>
   	 <title>CURD Ingredientes</title>
     <meta charset="utf-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
 	<!-- <link rel="stylesheet" href="./Recursos/css/bootstrap.min.css">-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	 <script src="../recursos/js/jquery.min.js"></script>
  	 <script src="../recursos/js/bootstrap.min.js"></script>
     <script src="../recursos/js/ingredientes.js"></script>
     <style>
     	.form-control{
			width:300px;
			/*left:150px;*/
			position: relative;
		}
		#bAceptar{
			left:-10px;
			position:relative;
		}
		#bCancelar{
			left:10px;
			position:relative;
		}
     </style>
    </head>
    <body >
    	
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
                                <button id="modificarVegetales" type="button" name="button" class="btn btn-default" >Modificar</button>
                                <button id="eliminarVegetales" type="button" name="button" class="btn btn-warning">Eliminar</button>
                                <button id="mostrarVegetales" type="submit" name="button" class="btn btn-success" onClick="mostrarTabla('vegetales')">Registro Vegetales</button>
        
                          </div>
                          <br/>
                          <div class="btn-group">
                                <h4>Configuracion de Carnes</h4>
                                <button id="agregarCarnes" type="button" name="button"  class="btn btn-primary" onClick="ModalVista('carnes')">Agregar</button>
                                <button id="modificarCarnes" type="button" name="button" class="btn btn-default">Modificar</button>
                                <button id="eliminarCarnes" type="button" name="button" class="btn btn-warning">Eliminar</button>
                                <button id="mostrarCarnes" type="submit" name="button" class="btn btn-success" onClick="mostrarTabla('carnes')">Registro Carnes</button>
                           
                          </div>
                          <br/>
                     </div>
                    </div>
                     <div class="row">
                        <div class="col-sm-6">
                          <div class="btn-group">
                                <h4>Configuracion de Ensaladas</h4>
                                <button id="agregarEnsaladas" type="button" name="button"  class="btn btn-primary" onClick="ModalVista('ensaladas')">Agregar</button>
                                <button id="modificarEnsaladas" type="button" name="button" class="btn btn-default">Modificar</button>
                                <button id="eliminarEnsaladas" type="button" name="button" class="btn btn-warning">Eliminar</button>
                                <button id="mostrarEnsaladas" type="submit" name="button" class="btn btn-success" onClick="mostrarTabla('ensaladas')">Registro Ensaladas</button>
                                
                          </div>
                          <br>
                          <div class="btn-group">
                                <h4>Configuracion de Especias</h4>
                                <button id="agregarEspecias" type="button" name="button"  class="btn btn-primary" onClick="ModalVista('especias')">Agregar</button>
                                <button id="modificarEspecias" type="button" name="button" class="btn btn-default">Modificar</button>
                                <button id="eliminarEspecias" type="button" name="button" class="btn btn-warning">Eliminar</button>
                                <button id="mostrarEspecias" type="submit" name="button" class="btn btn-success" onClick="mostrarTabla('especias')">Registro Especias</button>
                             
                          </div>
                        </div>
                     </div>
               </div>
              <br/>
          
              <div class="row">
              	<div class="col-sm-10">
                    <div id="div-tabla-vegetales" class="table-responsive">
                        <h3 id="tituloTabla" align="center">Tabla de Registro de Vegetales</h3>
                        <table id="tablaVegetales" class="table table-striped table-condensed table-hover">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Descripcion</th>
                              <th>Unidad Medicion</th>
                              <th>Accion</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                          include "../data/dataVegetales.php";
                          $consulta= new DataVegetales();
                          $consulta->mostrarVegetalesTodo();
                            ?>
                          </tbody>
                        </table>
            
                    </div>
                    
                     <div id="div-tabla-carnes" class="table-responsive">
                        <h3 id="tituloTabla" align="center">Tabla de Registro de Carnes</h3>
                        <table id="tablaCarnes" class="table table-striped table-condensed table-hover">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Descripcion</th>
                              <th>Unidad Medicion</th>
                              <th>Accion</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
                          include "../data/dataCarnes.php";
                          $consulta= new DataCarnes();
                          $consulta->mostrarCarneTodo();
                            ?>
                          </tbody>
                        </table>
            
                    </div>
                    
                    <div id="div-tabla-ensaladas" class="table-responsive">
                        <h3 id="tituloTabla" align="center">Tabla de Registro de Ensaladas</h3>
                        <table id="tablaEnsaladas" class="table table-striped table-condensed table-hover">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Descripcion</th>
                              <th>Unidad Medicion</th>
                              <th>Accion</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
							  include "../data/dataEnsalada.php";
							  $consulta= new DataEnsalada();
							  $consulta->mostrarEnsaladaTodo();
                           ?>
                          </tbody>
                        </table>
            
                    </div>
                    
                    <div id="div-tabla-especias" class="table-responsive">
                        <h3 id="tituloTabla" align="center">Tabla de Registro de Especias</h3>
                        <table id="tablaEspecias" class="table table-striped table-condensed table-hover">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Descripcion</th>
                              <th>Unidad Medicion</th>
                              <th>Accion</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                          include "../data/dataEspecias.php";
                          $consulta= new DataEspecias();
                          $consulta->mostrarEspeciaTodo();
                            ?>
                          </tbody>
                        </table>
            
                    </div>
                </div>
              </div>
                          <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                          <!-- Modal content-->
                          <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title" id="titulo" align="center"></h4>
                                </div>
                                 <div class="modal-body">
                                    <form  id="formIngredientes" class="fromularioIngredientes form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2"  id="lblnombre" for="nombre">Nombre</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text" id="ingredienteNombre" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" id="lbldescripcion" for="descripcion">Descripcion</label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text" id="ingredienteDescripcion" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" id="lblunidadmedicion" for="unidadmedicion">Unidad Medicion</label>
                                            <div class="col-sm-7">
                                          
                                                <input class="form-control" type="number" id="ingredienteMedicionUnidad" min=1 max=500 placeholder="Gramos" required>
                                                <input class="form-control" type="text" id="tipoIngrediente" > 
                                            </div>
                                        </div>
       
                                        <button  type="button" class="btn btn-default pull-left" id="bCancelar" data-dismiss="modal" >Close</button>
                                        <button  type="button" class="btn btn-default pull-right" name="bAceptar" id="bAceptar" onclick="ingresarIngrediente()">Aceptar</button>
                                    </form>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                </div>
                              
                          </div>
                    </div>
             
        	  </div>
       </div>
    </body>
</html>