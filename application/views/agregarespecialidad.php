
<section style="height:100%; width:100%;">



<br /><hr />
<h3	align="center">Nueva Especialidad</h3>
<hr />
<fieldset>
<form class="form-horizontal" method="post" action="<?php  echo base_url() ?>index.php/agregarespecialidad/insertaresp">
 <?php foreach ($registros as $fila) {                  ?>
  <?php  $id=$fila->ID_Profesionistas; ?>
  <?php }?>


<div class="container">
<div class="row">
      <div class='col-sm-6'>
  <div class="form-group">
    <label class="col-xs-3 control-label" for="nomesp">Nombre de la Especialidad</label>
    <div class="col-sm-6">
      <input id="nomesp" name="nomesp" type="text" placeholder="" class="form-control input-md" >
    </div>
  </div></div></div></div>
  <div class="container">
<div class="row">
      <div class='col-sm-6'>
  <div class="form-group">
    <label class="col-xs-3 control-label" for="tipoesp">Tipo de especialidad</label>
    <div class="col-sm-6">
      <input id="tipoesp" name="tipoesp" type="text" placeholder="" class="form-control input-md" >
    </div>
  </div></div></div></div>
 
  <div class="container">
<div class="row">
      <div class='col-sm-6'>
  <div class="form-group">
    <label class="col-xs-3 control-label" for="años">Años estudiados</label>
    <div class="col-sm-6">
      <input id="anios" name="anios" type="text" placeholder="" class="form-control input-md" >
    </div>
  </div></div></div></div>
  
<button name="agregar" class="btn btn-primary"  type ="submit" value="<?php echo $id ?>" style=" alignment-adjust:middle; margin:5px; width:200px" >Agregar</button>
</form></fieldset>

<a href="nuevo">
<button name="cerrar" class="btn btn-danger" style=" alignment-adjust:middle; width:200px; margin:4px;">Cancelar</button>
</a> 

</section>



