<!DOCTYPE html>
<html>
 <head>
   <title>Seleccione Sector</title>
	
 </head>
 <body>
   <div class="formulario">
     <form class="formulario-sector" action="../business/SectorActionPost.php" method="post">
       <?php echo "ID del sector";?>
       <input type="text" name="idSector" id="idSector" value"" />
       <br />
       <?php echo "Digite nombre del sector"; ?>
       <input type="text" name="nombreSector" id="nombreSector" value="" />
       <br />
      <?php echo "Digite capacidad de personas"?>
      <input type="number" min="0" name="capacidadSector" id="capacidadSector" value="" />
      <br />
      <?php echo "Digite cantidad de mesas"?>
      <input type="number" min="0" name="cantidadMesas" id="cantidadMesas"value=""/>
      <br />
      <?php echo "Digite estado del sector"?>
      <select class="estado" name="estadoSector" id="estadoSector">
        <option value="Habilidato">Habilidato</option>
        <option value="Deshabilitado">Deshabilitado</option>
      </select>
      <br />
      <input type="submit" value="Ingresar" name="ingresar" id="ingresar">
      <input type="button" value="Cancelar" onclick="#">
     </form>


   </div>
 </body>
</html>
