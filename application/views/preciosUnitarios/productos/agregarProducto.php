<section>
    
<legend style="margin-top:20px;">Agregar Producto</legend>

<form class="form-group" id="formAgregarProducto" action="<?= site_url() ?>/preciosUnitarios/productos/set" method="POST" style="margin-left:100px;">
        
        <div class="row">
            <div class="form-group col-lg-9">
                <label class="control-label etiquetas" for="nombre" style="width: 150px; padding-left: 0px; padding-right: 0px;">Nombre</label>  
                <input id="nombre" name="nombre" type="text" placeholder="Nombre del producto" class="form-control input-md">
            </div>

            <div class="form-group col-lg-9">
                <label class="control-label etiquetas" for="Unidad" style="padding-left: 0px; padding-right: 0px;">Unidad</label>
                <select id="unidadMedida" name="unidadMedida" class="form-control">
                    <option value="ML">ML</option>
                    <option value="PZA">PZA</option>
                    <option value="M2">M2</option>
                    <option value="CARTUCHO">CARTUCHO</option>
                </select>
            </div>

            <div class="form-group col-lg-9">
                <label class="control-label etiquetas" for="Precio unitario" style="width: 150px; padding-left: 0px; padding-right: 0px;">Precio unitario  $</label>  
                <input id="precioUnitario" name="precioUnitario" type="text" placeholder="Precio" class="form-control input-md">
            </div>

            <div class="form-group col-lg-9">
                <label class="control-label etiquetas" for="Categoria" style="padding-left: 0px; padding-right: 0px;">Categoria</label>
                <select id="idCategoria" name="idCategoria" class="form-control">
                    <option value="1">Obra Negra</option>
                    <option value="2">Acabados</option>
                    <option value="3">Instalaciones</option>
                    
                </select>
            </div>
            <div class="col-md-4" style="margin-left:600px;">
                <div class="row">
                    <button type="submit" class="btn btn-success" style="width: 86px;" >Guardar</button></form>
                    <a type="button" class="btn btn-danger" style="margin-left:10px; width: 86px;" href="<?php echo site_url("preciosUnitarios/productos"); ?>">Cancelar</a>
                </div>
            </div>
        </div>
</section>