
        <section>
        
      
<br>

<hr>
<h3 align="center">Carreras del Profesionista</h3>
          <table class="table" style=" width:100%;" align="center">
     <tr>
    <th scope="col">Nombre  </th>
    <th scope="col">Grados    </th>
    <th scope="col">Especialidad   </th>
    <th scope="col">Años</th>
     <th scope="col">Cedula</th>
    
      <th scope="col">Eliminar</th>
   
  </tr>
    <?php  if($registros){
    foreach ($registros as $fila) { 
    ?>
  <tr>
    <td><?php echo $fila->nombrecarrera; $dato=$fila->idCarrera; ?></td>
    <td><?php echo $fila->grado; ?></td>
    <td><?php echo $fila->especialidad; ?></td>
    <td><?php echo $fila->años; ?></td>
    <td><?php echo $fila->cedula; ?></td>
    <td><form name="form1" method="post" action="<?php echo base_url(); ?>index.php/Agregarcarrera/eliminarcarrera" >
          <button id="elimina" name="elimina" class="btn btn-danger btn-s" type="submit" value="<?php echo $dato?>"> <span class="glyphicon glyphicon-star"></span> Eliminar </button>
      </form></td>
    </tr> 
    <?php  }} ;?>
  </table>
     <form name="form1" method="post" action="<?php echo base_url(); ?>index.php/ver/vermas" >
      <button id="id" name="id" class="btn btn-success" type="submit" value="<?php echo $id;?>" >Regresar</button>
     </form>
    
     <form  method="post" action="<?php echo base_url(); ?>index.php/agregarcarrera" >
     <button id="id" name="id" type="submit" class="btn btn-success"  value="<?php echo $id;?>">Agregar Carrera</button>
     </form>
        
</section>