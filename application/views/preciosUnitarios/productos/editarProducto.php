<section>
    <h2>Editar Producto</h2><hr>
    <form class="form-group" id="formEditarProducto">
        <div class="row">
            <div class="col-lg-9">
                <label class="control-label etiquetas" for="Nombre" style="padding-left: 0px; padding-right: 0px;">Nombre</label>  
                <input id="Nombre" name="Nombre" type="text" placeholder="Nombre del producto" class="form-control input-md" required="">
                <br>
            </div>

            <div class="form-group col-md-8">
                <label class="control-label etiquetas" for="Unidad" style="padding-left: 0px; padding-right: 0px;">Unidad</label>
                <select id="unidad" name="unidad" class="form-control">
                    <option value="1">ML</option>
                    <option value="2">PZA</option>
                    <option value="3">M2</option>
                    <option value="4">CARTUCHO</option>
                </select>
            </div>

            <div class="form-group col-md-8">
                <label class="col-md-2 control-label etiquetas" for="Precio unitario" style="width: 150px; padding-left: 0px; padding-right: 0px;">Precio unitario  $</label>  
                <input id="preciounitario" name="preciounitario" type="text" placeholder="Precio" class="form-control input-md" required="">
            </div>

            <div class="form-group col-md-8">
                <label class="col-md-2 control-label etiquetas" for="Categoria" style="padding-left: 0px; padding-right: 0px;">Categoria</label>
                <select id="categoria" name="categoria" class="form-control">
                    <option value="1">Option one</option>
                    <option value="2">Option two</option>
                </select>
            </div>
            <div class="col-md-8" style="margin-left:100px;">
                <div class="row">
                    <button id="Guardar" name="Guardar" class="btn btn-success" >Guardar</button>
                    <button id="Cancelar" name="Cancelar" class="btn btn-danger" style=" margin-left: 175px;">Cancelar</button>
                </div>
            </div>
        </div>
    </form>
</section>