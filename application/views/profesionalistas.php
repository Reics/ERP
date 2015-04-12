<section style="height:100%; width:100%;">




<fieldset>



<div  align="center" class="form-group" style="height: 100%; width: 98%; margin: 10px; color: #013; font-size: 16px;">
  
  <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
    
    <p alig align="center">Listado de profesionistas</p>
  </div>

  <table class="table table-hover" style=" width:80%;" align="center">
     <tr>

    <th scope="col">Nombre  </th>
    <th scope="col">Apellido    </th>
    <th scope="col">Profesión     </th>
    <th scope="col">Especialidad</th>
    <th scope="col">Registro </th>
    <th scope="col">Domicilio    </th>
    <th scope="col">Telefono   </th>
    <th scope="col">Ver Mas </th>
    </tr>   
      <?php foreach($registros as $fila){  ?>
    <tr>
    <td><?php echo $fila->Nombre; ?></td>
    <td><?php echo $fila->Apellidos; ?></td>
    <td> <?php  $dato=$fila->ID_Profesionistas; echo $fila->profesion; ?></td>
    <td><?php echo $fila->nombre_especialidad; ?></td>
    <td><?php echo $fila->FECHA_ACTUALIZACION; ?></td>
    <td><?php echo $fila->calle1; ?></td>
    <td><?php echo $fila->movil1; ?></td>
    
    <td>
      <form name="form1" method="post" action="<?php echo base_url(); ?>index.php/ver/vermas" >
          <button id="vermas" name="id" class="btn btn-primary btn-s" type="submit" value="<?php echo $dato?>"> <span class="glyphicon glyphicon-star"></span> Ver Más </button>
      </form>
    </td>
  </tr>
       <?php } ?>     
  </table>

  
  

<div class="form-group" align="right">
  <label class="col-md-4 control-label" for="agregar"></label>
  <div class="col-md-4">
   
   
    </a>  </div>
</div>
 
</div>


</div>
<br /><br />
</fieldset>
<div style="  float:none;">
<form class="navbar-form navbar-left" role="search" method="post" action="<?php echo base_url(); ?>index.php/ver/buscarPorProfesion">
  <div class="form-group">
    <input type="text" name="profesion" class="form-control" placeholder="Search" >
  </div>
     <button type="submit" class="btn btn-default">Filtrar por profesion </button>
</form>



<form class="navbar-form navbar-left" role="search" method="post" action="<?php echo base_url(); ?>index.php/ver/buscarPorEspecialidad">
  <div class="form-group">
    <input type="text"  name="especialidad"class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Filtrar por especialidad </button>
</form>



<form class="navbar-form navbar-left" role="search" method="post" action="<?php echo base_url(); ?>index.php/ver/buscarPorCarrera">
  <div class="form-group">
    <input type="text"  name="carrera"class="form-control" placeholder="Search">
  </div>
  
  <button type="submit" class="btn btn-default">Filtrar por carrera </button>
</form>
</div>
<br /><br /><br /><br />
<div align="center">
<a href="Nuevo">
<button name="agregar" class="btn btn-primary" style=" alignment-adjust:middle; margin:5px; width:150px" >Agregar nuevo</button>
</a>
<a href="<?php echo base_url(); ?>index.php/Welcome">
<button name="cerrar" class="btn btn-danger" style=" alignment-adjust:middle; width:150px;">Cerrar</button>
</a>
</div>
</section>

