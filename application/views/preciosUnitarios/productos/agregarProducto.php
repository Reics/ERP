<section>
    
<div class="col-md-8">
</div>

<div class="col-md-2">
  <input id="Search" name="Search" type="text" placeholder="Search..." class="form-control input-md" style="margin-top:20px;">
</div> 

<legend style="margin-top:20px; padding-top: 30px; margin-bottom: 40px;" align="center">Agregar Producto</legend>

<div style="margin-left: 400px; width: 900px;" aling="center">
    <form class="form-horizontal">
      <div class="form-group col-md-8">
        <label class="control-label etiquetas" for="Nombre" style="padding-left: 0px; padding-right: 0px;">Nombre</label>  
        <input id="Nombre" name="Nombre" type="text" placeholder="Nombre del producto" class="form-control input-md" required="">
      </div>

      <div class="form-group col-md-8">
        <label class="control-label etiquetas" for="Unidad" style="padding-left: 0px; padding-right: 0px;">Unidad</label>
          <select id="Unidad" name="Unidad" class="form-control">
            <option value="1">Option one</option>
            <option value="2">Option two</option>
          </select>
      </div>

      <div class="form-group col-md-8">
        <label class="col-md-2 control-label etiquetas" for="Precio unitario" style="width: 150px; padding-left: 0px; padding-right: 0px;">Precio unitario  $</label>  
        <input id="Precio unitario" name="Precio unitario" type="text" placeholder="Precio" class="form-control input-md" required="">
      </div>

      <div class="form-group col-md-8">
        <label class="col-md-2 control-label etiquetas" for="Categoria" style="padding-left: 0px; padding-right: 0px;">Categoria</label>
        <select id="Categoria" name="Categoria" class="form-control">
          <option value="1">Option one</option>
          <option value="2">Option two</option>
        </select>
      </div>
    </form>
    <div class="col-md-8" style="margin-left:100px;">
      <div class="row">
        <button id="Guardar" name="Guardar" class="btn btn-success" >Guardar</button>
        <button id="Cancelar" name="Cancelar" class="btn btn-danger" style=" margin-left: 175px;">Cancelar</button>
      </div>
    </div>
</div>

</section>