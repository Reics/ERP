<section>

    <hr></hr>
    <h3 align="center">Men&uacute; Profesionistas</h3>
     <hr></hr>
 

    <form method="post" action="<?php  echo base_url() ?>index.php/welcome/mostrar">
  <div class="input-group" style=" width:35%; margin:10px;">
      <span class="input-group-btn">
        <button  class="btn btn-default" type="submit" >Buscar profesionista por nombre</button>
      </span>
      <input type="text" class="form-control" id="nombre" name="nombre">
     
    </div>
   
</form>

  
  <div class="btn-group-vertical">
  <br></br>
 <a href="<?php echo base_url() ?>index.php/Listado">  <button id="button1id" name="button1id" class="btn btn-success" style="margin:10px;" onClick="">Ir a listado de Profesionistas</button></a>
   <a href="<?php echo base_url() ?>index.php/Nuevo">  <button type="button" class="btn btn-primary" style="margin:10px;">Ir a Añadir Nuevo Profesionista</button> </a> </div>
  
  <div align="center" style=" float:right; width:55%; "> 
    <strong>Añadidos Recientemente</strong>


<table style=" float:right; width:45%; margin:20px;" align="center"  class="table table-striped" >
      
       <tr>
        <td width="50%" height="31" align="center">Nombre </td>
        <td width="50%"align="center">Profesi&oacute;n</td>
      </tr>
  
       <?php foreach($profes as $prof){ ?>
      <tr>
        <td align="center" ><?php echo $prof['nombre']; ?> </td> 
        <td align="center"  > <?php echo $prof['profesion']; ?></td> 
      </tr>  
  <?php } ?>
      
 </table>
  
 
 
  </div>
  
  
  
 
  <div><br><br><br><br><br><br><br></div>

</section>