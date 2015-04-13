<section>
    <legend style="color:#black">Agregar Productos a Presupuesto</legend>
    <form class="form-group" id="formAgregarProductoPresupuesto" style="margin-left: 200px;"action="<?= site_url() ?>/preciosUnitarios/presupuestos/setProducto" method="POST">
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="col-md-3 control-label" style="width: 100px;" for="idPreciosUnitarios">Producto</label>
                    <select class="form-control" name="idPreciosUnitarios" id="idPreciosUnitarios">
                        <?php
                         if ($producto != NULL) {
                            foreach ($producto as $p):
                                ?>
                                <option value="<?php echo $p['idPreciosUnitarios']; ?>"><?php echo $p['nombre']; ?></option>
                                <?php
                            endforeach;
                        }
                        ?> 
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="col-md-3 control-label" style="width: 100px;" for="cantidad">Cantidad</label>
                    <input id="cantidad" name="cantidad" type="text" placeholder="0" class="form-control input-md">
                </div>
            </div>
        </div>


        <div class="form-group">

            <div class="col-md-3">
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label class="col-md-3 control-label" style="width: 130px;" for="precio_unitario">Precio Unitario</label>  
                    <input id="precio_unitario" name="precio_unitario" type="text" placeholder="$0.00" class="form-control input-md">
                </div>
                <div class="col-md-3">
                    <label cclass="col-md-3 control-label" style="width: 140px;" for="importe">Importe</label>
                    <input  type="text" placeholder="$0.00" class="form-control input-md">
                </div>
            </div>

            <div class="row" style="margin-top: 50px; margin-left: 175px;" >
                <div class="col-md-4" style="margin-: 50px">
                    <button type="submit" class="btn btn-success" style="width: 86px;" >Guardar</button></form>
                </div>
                <div class="col-md-4" style="margin-left: 330px;">
                    <button id="Cancelar" name="Cancelar" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
            </section>