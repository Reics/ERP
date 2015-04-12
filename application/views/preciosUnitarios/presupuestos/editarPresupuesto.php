<section>

<legend style="margin-top:20px;">Agregar Presupuestos</legend>
    <form class="form-horizontal" id="formEditarPresupuesto" action="<?= site_url() ?>/preciosUnitarios/presupuestos/update" method="POST">
      <input hidden name="idPresupuesto" value="<?= $idPresupuesto ?>">
      <div class="form-group">
        <label class="col-md-2 control-label etiquetas" for="Contratista">Contratista</label>  
        <div class="col-md-8">
          <input id="contratista" name="contratista" type="text" placeholder="Nombre del contratista" class="form-control input-md" required=""autofocus required value="<?= $contratista ?>">
        </div>  
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label etiquetas" for="Obra">Obra</label>  
        <div class="col-md-8">
          <input id="obra" name="obra" type="text" placeholder="Nombre de la obra" class="form-control input-md" required="" autofocus required value="<?= $obra ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label etiquetas" for="Ubicacion">Ubicacion</label>  
        <div class="col-md-8">
          <input id="ubicacion" name="ubicacion" type="text" placeholder="Calle, Numero, Colonia" class="form-control input-md" required="" autofocus required value="<?= $ubicacion ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label etiquetas" for="Analisis">Análisis</label>
        <div class="col-md-4">                     
          <input class="form-control" id="analisis" name="analisis" style="height: 39px; width: 761px;" placeholder="Escriba aquí el análisis"  autofocus required value="<?= $analisis ?>">
          
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-2 control-label etiquetas" for="Ejecucion1">Ejecucion de </label>  
        <div class="col-md-2">
          <input id="fecha_inicio" name="fecha_inicio" type="date" placeholder="Fecha inicio" class="form-control input-md" required="" autofocus required value="<?= $fecha_inicio ?>">
        </div>
        <label class="col-md-1 control-label etiquetas" style="width: 40px;" for="Ejecucion2">a</label> 
        <div class="col-md-2">
          <input id="fecha_fin" name="fecha_fin" type="date" placeholder="Fecha fin" class="form-control input-md" required="" autofocus required value="<?= $fecha_fin ?>">
        </div> 
      </div>

       <div class="row" style="margin-left: 175px;"> 
        
        <div class="col-md-1">
        </div>

        <div class="col-md-2">
          <label class="col-md-1 control-label etiquetas" for="Unidad">Unidad</label>  
          <input id="unidad" name="unidad" type="text" placeholder="" class="form-control input-md" required="" autofocus required value="<?= $unidad ?>">
        </div>
      
      <div class="col-md-1">
      </div>

        <div class="col-md-2">
          <label class="col-md-1 control-label etiquetas" for="Rendimiento">Rendimiento</label>  
          <input id="rendimiento" name="rendimiento" type="text" placeholder="" class="form-control input-md" required="" autofocus required value="<?= $rendimiento ?>">
        </div>

      <div class="col-md-1">
      </div>

        <div class="col-md-2">
          <label class="col-md-1 control-label etiquetas" for="Partida">Partida</label>  
          <input id="partida" name="partida" type="text" placeholder="" class="form-control input-md" required="" autofocus required value="<?= $partida ?>">
        </div>
      </div>

      <div class="col-md-1">
      </div>

      <div class="col-md-4" style="margin-left:600px;">
                <div class="row">
                    <button type="submit" class="btn btn-success" style="width: 86px;" >Guardar</button></form>
                    <a type="button" class="btn btn-danger" style="margin-left:10px; width: 86px;" href="<?php echo site_url("preciosUnitarios/presupuestos"); ?>">Cancelar</a>
                </div>
            </div>
    </form>
</section>
