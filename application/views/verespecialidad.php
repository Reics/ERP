
<section>

   
    <br>

    <hr>
    <h3 align="center">Especialidades del Profesionista</h3>
    <table class="table" style=" width:100%;" align="center">
        <tr>
            <th scope="col">Nombre  </th>
            <th scope="col">Tipo    </th>

            <th scope="col">Años</th>

            <th scope="col">Eliminar</th>

        </tr>
        <?php if($registros){ 
            foreach ($registros as $fila) { ?>
        <tr>
            <td> <?php echo $fila->nombre_especialidad; $dato=$fila->ID_especialidad?> </td>
            <td><?php echo $fila->tipo; ?></td>
            <td><?php echo $fila->años; ?></td>
            <td><form name="form1" method="post" action="<?php echo base_url(); ?>index.php/Agregarespecialidad/eliminaresp" >
          <button id="elimina" name="elimina" class="btn btn-danger btn-s" type="submit" value="<?php echo $dato?>"> <span class="glyphicon glyphicon-star"></span> Eliminar </button>
      </form></td>
        </tr>
        <?php }}else
            ?> 
           
    </table>
      <form name="form1" method="post" action="<?php echo base_url(); ?>index.php/ver/vermas" >
        <button id="<?php echo base_url(); ?>index.php/verespecialidad" name="id" class="btn btn-success" type="submit" value="<?php echo $id?>">Regresar</button>
      </form>



 <form  method="post" action="<?php echo base_url(); ?>index.php/agregarespecialidad" >
     <button id="id" name="id" type="submit" class="btn btn-success"  value="<?php echo $id;?>">Agregar Especialidad</button>
     </form>

   

</section>