<!DOCTYPE html>
<html>
 <head>
   <title>Seleccione Sector</title>
 </head>
 <body>
   <div class="formulario">
     <form class="formulario-sector" action="index.htm" method="post">
       <?php echo "ID del sector";?>
       <input type="text" name="idSector" value"" />
       <br />
       <?php echo "Digite nombre del sector"; ?>
       <input type="text" name="nombreSector" value="" />
       <br />
      <?php echo "Digite capacidad de personas"?>
      <input type="number" min="0" name="capacidadSector" value="" />
      <br />
      <?php echo "Digite cantidad de mesas"?>
      <input type="number" min="0" name="cantidadMesas" value=""/>
      <br />
      <?php echo "Digite estado del sector"?>
      <select class="estado" name="estadoSector">
        <option value="Habilidato">Habilidato</option>
        <option value="Deshabilitado">Deshabilitado</option>
      </select>
      <br />
      <input type="submit" value="Ingresar">
      <input type="button" value="Cancelar" onclick="index.php">
     </form>


   </div>
 </body>
</html>
