<section>
    <h2>Editar Producto</h2><hr>
    <form class="form-group" id="formEditarProducto" action="<?= site_url() ?>/preciosUnitarios/productos/update" method="POST">
        <input hidden name="idPreciosUnitarios" value="<?= $idPreciosUnitarios ?>">
        <div class="row">
            <div class="col-lg-9">
                <label class="control-label etiquetas" for="Nombre" style="padding-left: 0px; padding-right: 0px;">Nombre</label>  
                <input id="nombre" name="nombre" type="text" placeholder="Nombre del producto" class="form-control input-md" required="" autofocus required value="<?= $nombre ?>">
                <br>
            </div>

            <div class="form-group col-md-8">
                <label class="control-label etiquetas" for="unidadMedida" style="padding-left: 0px; padding-right: 0px;">Unidad</label>
                <select id="unidadMedida" name="unidadMedida" class="form-control">
                    <option value="<?=$unidadMedida ?>"><?= $unidadMedida ?></option>
                    <option value="ML">ML</option>
                    <option value="PZA">PZA</option>
                    <option value="M2">M2</option>
                    <option value="CARTUCHO">CARTUCHO</option>
                </select>
            </div>

            <div class="form-group col-md-8">
                <label class="col-md-2 control-label etiquetas" for="Precio unitario" style="width: 150px; padding-left: 0px; padding-right: 0px;">Precio unitario  $</label>  
                <input id="precioUnitario" name="precioUnitario" type="text" placeholder="Precio" class="form-control input-md" required="" autofocus required value="<?= $precioUnitario ?> ">
            </div>

            <div class="form-group col-md-8">
                <label class="col-md-2 control-label etiquetas" for="Categoria" style="padding-left: 0px; padding-right: 0px;">Categoria</label>
                <select id="idCategoria" name="idCategoria" class="form-control">
                    <option value="<?= $idCategoria ?>"><?= $idCategoria ?></option>
                    <option value="1">Obra Negra</option>
                    <option value="2">Acabados</option>
                    <option value="3">Instalaciones</option>
                </select>
            </div>
            <div class="col-md-8" style="margin-left:100px;">
                <div class="row">
                    <button type="submit" id="Guardar" name="Guardar" class="btn btn-success" >Guardar</button>
                    <button id="Cancelar" name="Cancelar" class="btn btn-danger" style=" margin-left: 175px;">Cancelar</button>
                </div>
            </div>
        </div>
    </form>
</section>