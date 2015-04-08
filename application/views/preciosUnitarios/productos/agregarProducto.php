<section>
    <div class="col-md-8">
    </div>
      <div class="col-md-2">
          <input id="Search" name="Search" type="text" placeholder="Search..." class="form-control input-md">
        </div> 

    <form class="form-horizontal">

    <legend style="color:#FFFFFF">Agregar producto</legend>

      <div class="form-group">
        <label class="col-md-2 control-label etiquetas" for="Nombre">Nombre</label>  
        <div class="col-md-8">
          <input id="Nombre" name="Nombre" type="text" placeholder="Nombre del producto" class="form-control input-md" required="">
        </div>  
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label etiquetas" for="Unidad">Unidad</label>
        <div class="col-md-2">
          <select id="Unidad" name="Unidad" class="form-control">
            <option value="1">Option one</option>
            <option value="2">Option two</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label etiquetas" for="Precio unitario">Precio unitario  $</label>  
        <div class="col-md-2">
          <input id="Precio unitario" name="Precio unitario" type="text" placeholder="Precio" class="form-control input-md" required="">
        </div>  
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label etiquetas" for="Categoria">Categoria</label>
        <div class="col-md-2">
          <select id="Categoria" name="Categoria" class="form-control">
            <option value="1">Option one</option>
            <option value="2">Option two</option>
          </select>
        </div>
      </div>

      <div class="row" style="margin-top: 50px; margin-left: 175px;" >
        <div class="col-md-4" style="margin-: 50px">
        <button id="Guardar" name="Guardar" class="btn btn-success">Guardar</button>
      </div>
      <div class="col-md-4" style="margin-left: 330px;">
        <button id="Cancelar" name="Cancelar" class="btn btn-danger">Cancelar</button>
      </div>
    </div>

    </form>

</section>