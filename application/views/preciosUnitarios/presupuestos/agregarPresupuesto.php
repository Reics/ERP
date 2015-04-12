<section>

<legend style="margin-top:20px;">Agregar Presupuestos</legend>
    
    <form class="form-group" id="formAgregarPresupuesto" style="margin-left: 200px;"action="<?= site_url() ?>/preciosUnitarios/presupuestos/set" method="POST">
    
    <div class="row">
      <div class="form-group col-lg-10">
        <label class="control-label etiquetas" for="Contratista" style="padding-left: 0px; padding-right: 0px;">Contratista</label>  
        <input id="contratista" name="contratista" type="text" placeholder="Nombre del contratista" class="form-control input-md">
      </div>  

      <div class="form-group col-lg-10">
        <label class="control-label etiquetas" for="Contratista" style="padding-left: 0px; padding-right: 0px;">Obra</label>  
        <input id="obra" name="obra" type="text" placeholder="Nombre de la obra" class="form-control input-md" required="">
      </div>

      <div class="form-group col-lg-10">
        <label class="control-label etiquetas" for="Ubicacion" style="padding-left: 0px; padding-right: 0px;">Ubicacion</label>  
        <input id="ubicacion" name="ubicacion" type="text" placeholder="Calle, Numero, Colonia" class="form-control input-md" required="">
      </div>

      <div class="form-group col-lg-10" style="height: 70px;">
        <label class="control-label etiquetas" for="Analisis" style="padding-left: 0px; padding-right: 0px;">Análisis</label>
        <textarea class="form-control" id="analisis" name="analisis" style="height: 40px; width: 780px;" placeholder="Escriba aquí el análisis"></textarea>
        </div>
      </div>

      <div class="form-group col-lg-16 row" style="height: 40px;">
        <label class="col-md-2 control-label etiquetas" for="Ejecucion1" style="width: 115px; padding-left: 15px; padding-right: 0px; padding-top: 7px;">Ejecucion de </label>  
        <div class="col-md-4">
          <input id="fecha_inicio" name="fecha_inicio" type="date" placeholder="Fecha inicio" class="form-control input-md" required="">
        </div>
        <label class="col-md-1 control-label etiquetas" style=" padding-top: 5px; width: 50px;" for="Ejecucion2">a</label> 
        <div class="col-md-4">
          <input id="fecha_fin" name="fecha_fin" type="date" placeholder="Fecha fin" class="form-control input-md" required="">
        </div> 
      </div>

      <div class="row"> 
        
        <div class="col-md-2">
          <label class="col-md-2 control-label etiquetas" for="Unidad">Unidad</label>  
          <input id="unidad" name="unidad" type="text" placeholder="" class="form-control input-md" required="">
        </div>
      
        <div class="col-md-2">
        </div>

        <div class="col-md-2">
          <label class="col-md-2 control-label etiquetas" for="Rendimiento">Rendimiento</label>  
          <input id="rendimiento" name="rendimiento" type="text" placeholder="" class="form-control input-md" required="">
        </div>

        <div class="col-md-2">
        </div>

        <div class="col-md-2">
          <label class="col-md-2 control-label etiquetas" for="Partida">Partida</label>  
          <input id="partida" name="partida" type="text" placeholder="" class="form-control input-md" required="">
        </div>

      </div>

      <div class="col-md-4" style="margin-left:600px; margin-top:30px;">
        <div class="row">
          <button type="submit" class="btn btn-success" style="width: 86px;" >Guardar</button></form>
          <a type="button" class="btn btn-danger" style="margin-left:10px; width: 86px;" href="<?php echo site_url("preciosUnitarios/presupuestos"); ?>">Cancelar</a>
        </div>
      </div>

</section>