
<section>       
    <legend style="margin-top:20px;">Productos</legend>


    <table class="table table-striped" id="dataTable">
        <thead>    
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio Unitario</th>
                <th>Unidad</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>        
            <?php if ($producto != NULL) {
                foreach ($producto as $p):
                    ?>
                    <tr>
                        <td><?php echo $p['idPreciosUnitarios']; ?></td>
                        <td><?php echo $p['nombre']; ?></td>
                        <td><?php echo $p['precioUnitario']; ?></td>
                        <td><?php echo $p['unidadMedida']; ?></td>
                        <td>
                            <a type="button" class="btn btn-default" aria-label="Left Align" href="<?= site_url() ?>/preciosUnitarios/productos/update_form/<?= $p['idPreciosUnitarios'] ?>">
                                <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                            </a>
                            <a type="button" class="btn btn-default" aria-label="Left Align" href="<?= site_url() ?>/preciosUnitarios/productos/delete/<?= $p['idPreciosUnitarios'] ?>">
                                <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach;
            }
            ?>

        </tbody>
    </table>

    <hr> <!-- Botones -->
    <div align="right">
        <a type="button" class="btn btn-danger" href="<?php echo site_url("menu/preciosUnitarios/"); ?>">Salir</a>
        <a type="button" class="btn btn-primary" href="<?php echo site_url("preciosUnitarios/productos/set_form"); ?>">Agregar Producto</a>
    </div>
</section>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  