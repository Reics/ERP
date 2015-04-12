
<section style="height:100%; width:100%;">



<br /><hr />
<h3	align="center">Nueva Carrera</h3>
<hr />
<fieldset>
<form class="form-horizontal" method="post" action="<?php  echo base_url() ?>index.php/agregarcarrera/insertar">
 <?php foreach ($registros as $fila) {                  ?>
  <?php  $id=$fila->ID_Profesionistas; ?>
  <?php }?>
<div class="container">
<div class="row">
      <div class='col-sm-6'>
  <div class="form-group">
    <label class="col-xs-3 control-label" for="nomobra">Nombre de la Carrera</label>
    <div class="col-sm-6">
      <input id="nomobra" name="nomobra" type="text" placeholder="" class="form-control input-md" required>
    </div>
  </div></div></div></div>
  <div class="container">
<div class="row">
      <div class='col-sm-6'>

  <div class="form-group">
    <label class="col-xs-3 control-label" for="nomobra">Especialidad</label>
    <div class="col-sm-6">
      <input id="espes" name="espes" type="text" placeholder="" class="form-control input-md" required>
    </div>
  </div></div></div></div>
  <div class="container">
<div class="row">
      <div class='col-sm-6'>
  <div class="form-group">
    <label class="col-xs-3 control-label" for="nomobra">Cedula profesional</label>
    <div class="col-sm-6">
      <input id="cedula" name="cedula" type="text" placeholder="" class="form-control input-md" required>
    </div>
  </div></div></div></div>
  <div class="container">
<div class="row">
      <div class='col-sm-6'>
  <div class="form-group">
    <label class="col-xs-3 control-label" for="nomobra">Grado obtenido</label>
    <div class="col-sm-6">
      <input id="grado" name="grado" type="text" placeholder="" class="form-control input-md" required>
    </div>
  </div></div></div></div>
  <div class="container">
<div class="row">
      <div class='col-sm-6'>
  <div class="form-group">
    <label class="col-xs-3 control-label" for="nomobra">Años estudiados</label>
    <div class="col-sm-6">
      <input id="anios" name="anios" type="text" placeholder="" class="form-control input-md" required >
    </div>
  </div></div></div></div>
  
<button name="agregar" type="submit" class="btn btn-primary" style=" alignment-adjust:middle; margin:5px; width:200px" value="<?php echo $id ;?>" >Agregar</button>
</form></fieldset>

<a href="<?php echo base_url(); ?>index.php/">
<button name="cerrar" class="btn btn-danger" style=" alignment-adjust:middle; width:200px; margin:4px;">Cancelar</button>
</a> 

</section>



